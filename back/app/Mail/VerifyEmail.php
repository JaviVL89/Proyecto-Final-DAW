<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $url;

    public function __construct(MustVerifyEmail $user)
    {
        $this->url = $user->verificationUrl();
    }

    public function build()
    {
        return $this->view('emails.auth.verify-email')
                    ->with(['url' => $this->url]);
    }
}
