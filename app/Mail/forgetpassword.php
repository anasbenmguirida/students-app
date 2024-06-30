<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class forgetpassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    private $URL ; 
    public function __construct($URL)
    {
        $this->URL=$URL;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Reset password account',
        );
    }

    public function build()
    {
        return $this->view('publicviews.resetEmail')
        ->subject('Reset the password for your account')
        ->with(['URL' => $this->URL]);
    }
}
