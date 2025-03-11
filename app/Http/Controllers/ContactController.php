<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::send('emails.contact', ['data' => $data], function ($message) use ($data) {
            $message->to('your-email@yourdomain.com')
                    ->subject($data['subject'])
                    ->replyTo($data['email']);
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
