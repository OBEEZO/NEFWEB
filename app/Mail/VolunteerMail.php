<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VolunteerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details; // Define the variable

    public function __construct($details)
    {
        $this->details = $details; // Assign received data
    }

    public function build()
    {
        return $this->from('your-email@example.com', 'Nudi Empire Foundation')
                    ->replyTo($this->details['email'], $this->details['name'])
                    ->subject('New Volunteer Submission')
                    ->view('emails.volunteer')
                    ->with('details', $this->details); // Pass data to view
    }
}
