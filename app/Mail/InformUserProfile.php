<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InformUserProfile extends Mailable
{
    use Queueable;
    use SerializesModels;

    protected $user;
    protected $attachment;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build()
    {
        $mail = $this->view('admin.user.mail.inform', [
            'user' => $this->user,
        ]);

        return $mail;
    }
}