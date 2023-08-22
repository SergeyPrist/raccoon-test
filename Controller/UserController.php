<?php

use Service\UserSettingsService;

class UserController
{
    /**
     * @Route("/user/setting/change")
     */
    public function changeUserSetting($request, UserSettingsService $userSettingsService)
    {
        /*
         * 1. Через security получаем пользователя $user (либо через репозиторий по id)
         * 2. Из request получаем параметр, который нужно изменить $specificSetting
         * 3. Из request получаем способ подтверждения, который выбрал пользователь $verificationMethod
        */

        $userSettingsService->changeSetting($user, $setting, $verificationMethod);
    }

    /**
     * @Route("/user/setting/change/confirm")
     */
    public function settingChangeConfirmation($request, UserSettingsService $userSettingsService)
    {
        /*
         * 1. Через security получаем пользователя $user (либо через репозиторий по id)
         * 2. Из request получаем $verificationCode, отправленный пользователем
        */

        $userSettingsService->settingChangeConfirmation($user, $verificationCode);
    }
}