<?php

namespace Components\Interface;

use Entity\User;

interface SendVerificationCodeInterface
{
    public function __invoke(User $user, string $verificationCode);
}
