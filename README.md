Структура БД:
- Таблица user
- Таблица user_settings_confirmation (связь один user ко многим settings)

Структура приложения:
- UserController (принимает запросы с фронта)
- UserSettingsService (отвечает за изменения пользователя)
- UserSettingsConfirmationService (отвечает за логику подтверждения изменений параметров)
- SendVerificationCodeFactory (определяет отправителя сообщения пользователю)
- SendEmailVerificationCode, SendSMSVerificationCode, SendTelegramVerificationCode (отправители сообщений пользователю)
- SendVerificationCodeInterface (регламентирует работу отправителей сообщений пользователю)