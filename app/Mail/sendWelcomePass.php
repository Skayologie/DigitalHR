<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class sendWelcomePass extends Mailable
{
    use Queueable, SerializesModels;
    private string $email;
    private string $password;
    private string $name;

    /**
     * Create a new message instance.
     */
    public function __construct($email,$password,$name)
    {
        //
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Welcome to the Team! , Your Account Is Ready For You',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.welcome',
            with: [
                'CURRENT_YEAR'=>2025,
                'EMAIL_PLACEHOLDER'=>$this->email,
                'PASSWORD_PLACEHOLDER'=>$this->password,
                'name'=>$this->name,
            ]
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
