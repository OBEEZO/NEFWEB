<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DonationController extends Controller
{
    public function showForm()
    {
        return view('donate');
    }

    public function processMpesa(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'phone' => 'required'
        ]);

        // Format Phone Number (Ensure it is in 2547XXXXXXXX format)
        $phone = $request->phone;
        if (substr($phone, 0, 1) === '0') {
            $phone = '254' . substr($phone, 1);
        }

        // Get Access Token
        $accessToken = $this->getMpesaAccessToken();
        if (!$accessToken) {
            return back()->with('error', 'Failed to connect to MPESA. Please try again.');
        }

        // MPESA STK URL
        $stkUrl = env('MPESA_STK_URL', 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest');

        // Prepare Request
        $timestamp = now()->format('YmdHis');
        $password = base64_encode(env('MPESA_SHORTCODE') . env('MPESA_PASSKEY') . $timestamp);

        $stkData = [
            'BusinessShortCode' => env('MPESA_SHORTCODE'),
            'Password'          => $password,
            'Timestamp'         => $timestamp,
            'TransactionType'   => 'CustomerPayBillOnline',
            'Amount'            => $request->amount,
            'PartyA'            => $phone,
            'PartyB'            => env('MPESA_SHORTCODE'),
            'PhoneNumber'       => $phone,
            'CallBackURL'       => env('MPESA_CALLBACK_URL'),
            'AccountReference'  => 'Donation',
            'TransactionDesc'   => 'Donation Payment'
        ];

        // Send STK Push Request
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $accessToken,
            'Content-Type'  => 'application/json'
        ])->post($stkUrl, $stkData);

        // Log the response for debugging
        Log::info('MPESA STK Push Response: ', $response->json());

        if ($response->failed() || !isset($response->json()['ResponseCode'])) {
            return back()->with('error', 'MPESA transaction failed. Please try again.');
        }

        return back()->with('success', 'STK Push sent to your phone. Please complete the payment.');
    }

    private function getMpesaAccessToken()
    {
        $consumerKey = env('MPESA_CONSUMER_KEY');
        $consumerSecret = env('MPESA_CONSUMER_SECRET');
        $baseUrl = env('MPESA_ENV') === 'live' ? 'https://api.safaricom.co.ke' : 'https://sandbox.safaricom.co.ke';

        $response = Http::withBasicAuth($consumerKey, $consumerSecret)
            ->get($baseUrl . '/oauth/v1/generate?grant_type=client_credentials');

        if ($response->failed()) {
            Log::error('M-Pesa Access Token Error: ' . json_encode($response->json()));
            return null;
        }

        return $response->json()['access_token'] ?? null;
    }

    public function processBank(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'receipt' => 'required|file'
        ]);

        $path = $request->file('receipt')->store('receipts');

        Donation::create([
            'amount' => $request->amount,
            'method' => 'bank',
            'proof' => $path
        ]);

        return back()->with('success', 'Donation recorded. Thank you!');
    }

    public function index()
    {
        if (!auth()->check() || auth()->user()->role !== 'admin') {
            return redirect('/')->with('error', 'Unauthorized Access');
        }

        $donations = Donation::latest()->get();
        return view('admin.donations', compact('donations'));
    }
}
