<?php

namespace App\Class\Practical;

class Hnb implements Payment
{

    public function Process($amount)
    {
        return "hnb Payment Processed" . $amount;
    }
}
