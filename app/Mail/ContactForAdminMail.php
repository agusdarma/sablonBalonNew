<?php

namespace App\Mail;
use ContactUsData;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForAdminMail extends Mailable
{
    use Queueable, SerializesModels;
    public $contactUsData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactUsData $contactUsData)
    {
        $this->contactUsData = $contactUsData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->contactUsData->subject)
                    // ->to($this->contactUsData->email)
                    ->view('emails.contactForAdmin');
    }
}
