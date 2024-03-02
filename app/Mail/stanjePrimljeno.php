<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class stanjePrimljeno extends Mailable
{
    use Queueable, SerializesModels;
    public $reservation;
    /**
     * Create a new message instance.
     */
    public function __construct($reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Porudzbina je prihvacena Sumooprema.ba',
        );
    }

    /**
     * Get the message content definition.
     */

     public function build(){
        return $this->view('emails.stanjePrimljeno');
    }
    public function content(): Content
    {
        return new Content(
            view: 'emails.stanjePrimljeno',
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
