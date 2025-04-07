<?php

namespace App\Class\Practical;

class EmailService
{
    public function sendEmail($to, $subject, $message)
    {
        // Simulate sending an email
        echo "Email sent to $to with subject '$subject' and message '$message'";
    }
}
