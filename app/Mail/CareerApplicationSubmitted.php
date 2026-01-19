<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\UploadedFile;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerApplicationSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param array{name:string,email:string,phone:string,career:string,details:string} $payload
     */
    public function __construct(
        public array $payload,
        public UploadedFile $cvFile,
    ) {
    }

    /**
     * Build the message.
     */
    public function build(): static
    {
        $subject = 'New career application: ' . $this->payload['career'];

        return $this
            ->subject($subject)
            ->replyTo($this->payload['email'], $this->payload['name'])
            ->view('emails.career')
            ->with([
                'name' => $this->payload['name'],
                'email' => $this->payload['email'],
                'phone' => $this->payload['phone'],
                'career' => $this->payload['career'],
                'details' => $this->payload['details'],
            ])
            ->attach(
                $this->cvFile->getRealPath(),
                [
                    'as' => $this->cvFile->getClientOriginalName(),
                    'mime' => $this->cvFile->getClientMimeType(),
                ]
            );
    }
}
