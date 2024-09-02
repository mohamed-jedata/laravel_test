<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\User;


class StaffRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;


    /**
     * Create a new message instance.
     */
    public function __construct($user)
    {
        $this->user = $user;

    }

    public function build()
    {
        
        $registrationUrl = route('staff.register', $this->user->remember_token);

        return $this->view('emails.staff_registration')
                    ->subject('Complete Your Registration')
                    ->with([
                        'username' => $this->user->name,
                        'registrationUrl' => $registrationUrl,
                    ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Staff Registration Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.staff_registration'
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
