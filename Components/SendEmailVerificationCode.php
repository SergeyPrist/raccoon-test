<?php

namespace Components;

use Components\Interface\SendVerificationCodeInterface;
use Entity\User;

class SendEmailVerificationCode implements SendVerificationCodeInterface
{
    public function __invoke(User $user, string $verificationCode): void
    {
        $userEmail = $user->getEmail();

        //Отправляем $verificationCode на почту $userEmail
    }
}