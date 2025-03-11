<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\VolunteerMail;

class VolunteerController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate form input
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Prepare email data
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // Send email
        Mail::to('your-email@example.com')->send(new VolunteerMail($details));

        // Redirect with success message
        return back()->with('success', 'Your message has been sent successfully.');
    }
}
