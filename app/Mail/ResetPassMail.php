<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResetPassMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $resetPassCode;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $resetPassCode)
    {
        $this->user  = $user;
        $this->resetPassCode = $resetPassCode;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       
        return $this->subject('Zaher Dairy')->view('emails.resetPassword');
    }

}
