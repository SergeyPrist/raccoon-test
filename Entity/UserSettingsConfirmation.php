<?php

namespace Entity;

use DateTime;

class UserSettingsConfirmation
{
    private $userId;
    private string $settingValue;
    private string $verificationCode;
    private DateTime $verificationCodeExpirationTime;

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getSettingValue(): string
    {
        return $this->settingValue;
    }

    /**
     * @param string $settingValue
     */
    public function setSettingValue(string $settingValue): void
    {
        $this->settingValue = $settingValue;
    }

    /**
     * @return string
     */
    public function getVerificationCode(): string
    {
        return $this->verificationCode;
    }

    /**
     * @param string $verificationCode
     */
    public function setVerificationCode(string $verificationCode): void
    {
        $this->verificationCode = $verificationCode;
    }

    /**
     * @return DateTime
     */
    public function getVerificationCodeExpirationTime(): DateTime
    {
        return $this->verificationCodeExpirationTime;
    }

    /**
     * @param DateTime $verificationCodeExpirationTime
     */
    public function setVerificationCodeExpirationTime(DateTime $verificationCodeExpirationTime): void
    {
        $this->verificationCodeExpirationTime = $verificationCodeExpirationTime;
    }
}
