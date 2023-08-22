<?php

namespace Service;

use Components\SendVerificationCodeFactory;
use Entity\User;

class UserSettingsService
{
    public function __construct(
        private SendVerificationCodeFactory $verificationCodeFactory,
        private UserSettingsConfirmationService $confirmationService
    )
    {
    }

    public function changeSetting(User $user, string $setting, string $verificationMethod)
    {
        $verificationCodeSender = $this->verificationCodeFactory->getVerificationCodeSender($verificationMethod);
        $verificationCode = $this->confirmationService->generateVerificationCode();
        
        $this->confirmationService->setChangeSetting($user->getId(), $setting, $verificationCode);
        
        $verificationCodeSender($user, $verificationCode);

        // Здесь можно вернуть фронту ок, если отправка успешна, не ок, если отправка провалилась
    }

    public function settingChangeConfirmation(User $user, string $verificationCode): bool
    {
        $confirmedSetting = $this->confirmationService->validateSettingChangeConfirmation($user, $verificationCode);

        if (!empty($confirmation)) {
            $user->setSetting($confirmedSetting);
            // Записываем сущность с обновленным параметром

            return true;
        }

        return false;
    }
}
