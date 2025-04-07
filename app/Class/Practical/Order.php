<?php

namespace App\Class\Practical;

class Order
{
    public function __construct($name)
    {
        return "Order Created";
    }

    public function Process(Payment $payment)
    {
        return $payment->Process("1000");
    }
}
