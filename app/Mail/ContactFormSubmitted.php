<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param array{name:string,email:string,phone:?string,message:string,services:array} $payload
     */
    public function __construct(
        public array $payload,
    ) {
    }

    /**
     * Build the message.
     */
    public function build(): static
    {
        $subject = 'New contact request from ' . $this->payload['name'];
        return $this
            ->subject($subject)
            ->replyTo($this->payload['email'], $this->payload['name'])
            ->view('emails.contact')
            ->with([
                'name' => $this->payload['name'],
                'email' => $this->payload['email'],
                'phone' => $this->payload['phone'] ?? null,
                'messageContent' => $this->payload['message'],
                'services_selected' => $this->payload['services'],
            ]);
    }
}
