<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserMessage extends Mailable
{
    use Queueable, SerializesModels;

    private $messageContent; // Declare as private to ensure explicit passing

    /**
     * Create a new message instance.
     *
     * @param string $messageContent
     */
    public function __construct($messageContent)
    {
        $this->messageContent = $messageContent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Message from Admin')
                    ->view('SalesOfficer.user_message')
                    ->with('messageContent', $this->messageContent); // Explicitly pass the variable
    }
}
