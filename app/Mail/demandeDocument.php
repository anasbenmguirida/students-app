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
    public $typeDeDocumement; 
    public $email; 
    public $NomComplet ;  
    public function __construct($document,$email,$NomComplet)
    {
        $this->typeDeDocumement=$document;
        $this->NomComplet=$NomComplet;
        $this->email=$email;
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
       return  $this->view('students.demande-document')
       ->from($this->email, $this->NomComplet)
       ->subject('Demande de document scolaire')
       ->with([
           'document' => $this->typeDeDocumement,
           'NomComplet' => $this->NomComplet,
           'email' => $this->email,
       ]);
    }
}
