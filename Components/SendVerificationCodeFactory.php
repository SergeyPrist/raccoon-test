<?php

namespace Components;

use Components\Interface\SendVerificationCodeInterface;

class SendVerificationCodeFactory
{
    public const SMS_VERIFICATION_CODE_SENDER = 'sms';
    public const EMAIL_VERIFICATION_CODE_SENDER = 'email';
    public const TELEGRAM_VERIFICATION_CODE_SENDER = 'telegram';

    public function getVerificationCodeSender(string $verificationMethod): SendVerificationCodeInterface
    {
        switch ($verificationMethod) {
            case self::SMS_VERIFICATION_CODE_SENDER:
                return new SendSMSVerificationCode();
            case self::EMAIL_VERIFICATION_CODE_SENDER:
                return new SendEmailVerificationCode();
            case self::TELEGRAM_VERIFICATION_CODE_SENDER:
                return new SendTelegramVerificationCode();
        }
    }
}