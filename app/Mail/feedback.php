<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class feedback extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $messages;
    public $nom;
    public $email;
    public function __construct($nom , $email , $messages)
    {
        $this->nom=$nom ; 
        $this->email =$email  ; 
        $this-> messages= $messages ; 
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Feedback from a user',
        );
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {
        return $this->view('myviews.feedback')
                    ->from($this->email, $this->nom)
                    ->subject('New Feedback Message')
                    ->with([
                        'messages' => $this->messages,
                        'nom' => $this->nom,
                        'email' => $this->email,
                    ]);
    }
    
}
