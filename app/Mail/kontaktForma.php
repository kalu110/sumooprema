<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class kontaktForma extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $lname;
    public $email;
    public $messagesd;
    /**
     * Create a new message instance.
     */
    public function __construct($name,$lname,$email,$messagesd)
    {
        $this->name = $name;
        $this->lname = $lname;
        $this->email = $email;
        $this->messagesd = $messagesd;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Pitanje na Šumooprema.ba',
        );
    }
    /*
     * Get the message content definition.
     */
     public function build(){
        return $this->view('emails.kontakForma');
    }
    public function content(): Content
    {
        return new Content(
            view: 'emails.kontakForma',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
