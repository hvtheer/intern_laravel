<?php

namespace App\Services;

use App\Mail\InformUserProfile;
use Illuminate\Support\Facades\Mail;

class MailService
{
    public function sendInform($user, $attachment)
    {
        Mail::to($user['email'])->send(new InformUserProfile($user, $attachment));
    }
}