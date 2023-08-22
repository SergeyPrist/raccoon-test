<?php

namespace Service;

use DateTime;
use Entity\UserSettingsConfirmation;

class UserSettingsConfirmationService
{
    public function generateVerificationCode(): string
    {
        // Генерируем код для верификации

        return '';
    }

    public function setChangeSetting($userId, string $setting, string $verificationCode): void
    {
        $changeSettingConfirmation = new UserSettingsConfirmation();

        $changeSettingConfirmation->setUserId($userId);
        $changeSettingConfirmation->setSettingValue($setting);
        $changeSettingConfirmation->setVerificationCode($verificationCode);
        $changeSettingConfirmation->setVerificationCodeExpirationTime(new DateTime('+5minutes'));

        // Записываем сущность в бд
    }

    public function validateSettingChangeConfirmation($userId, string $incomingVerificationCode): ?string
    {
        $now = new DateTime();

        $userSettingsConfirmation = new UserSettingsConfirmation(); //находим последнюю запись по $userId
        $verificationCode = $userSettingsConfirmation->getVerificationCode();
        $verificationCodeExpirationTime = $userSettingsConfirmation->getVerificationCodeExpirationTime();

        if ($verificationCode == $incomingVerificationCode && $verificationCodeExpirationTime > $now) {
            return $userSettingsConfirmation->getSettingValue();
        }

        return null;
    }
}