<?php

namespace Components;

use Components\Interface\SendVerificationCodeInterface;
use Entity\User;

class SendTelegramVerificationCode implements SendVerificationCodeInterface
{
    public function __invoke(User $user, string $verificationCode): void
    {
        $userPhone = $user->getPhone();

        //Отправляем $verificationCode на телеграм по $userPhone
    }
}