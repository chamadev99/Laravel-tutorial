<?php

namespace App\Class\Practical;

class UserNotify
{
    private $emailService;

    public function  __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function notify($message)
    {
        // Notify the user with the given message
        return $this->emailService->sendEmail("chamarox123@gmail.com", "Notification", $message);
    }
}
