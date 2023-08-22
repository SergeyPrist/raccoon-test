<?php

namespace Components;

use Components\Interface\SendVerificationCodeInterface;
use Entity\User;

class SendSMSVerificationCode implements SendVerificationCodeInterface
{
    public function __invoke(User $user, string $verificationCode): void
    {
        $userPhone = $user->getPhone();

        //Отправляем смс $verificationCode на телефон $userPhone
    }
}