<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class demandeDocument extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    private $details ; 
    public function __construct($details)
    {
        $this->details=$details;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Demande Document',
        );
    }

    
    public function build()
    {
       
        //$url = url('/api/facture/' . $this->devi->demande->facture->id);

     return $this->subject('Mail from Example.com')->view('myviews.demande-document');;
    }
}
