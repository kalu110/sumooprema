<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;



    public $name;
    public $email;
    public $address;
    public $phone;
    public $napomena;
    public $products;
    public $ukupnasuma;
    /**
     * Create a new message instance.
     */
    public function __construct($name , $email ,$address, $phone, $napomena,$products, $ukupnasuma)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->phone = $phone;
        $this->napomena = $napomena;
        $this->products = $products;
        $this->ukupnasuma = $ukupnasuma;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Potvrda porudzbine Sumooprema.ba',
        );
    }

    /**
     * Get the message content definition.
     */
    public function build(){
        return $this->view('emails.test');
    }
    public function content(): Content
    {
       
       return new Content(
        view: 'emails.test', 
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
