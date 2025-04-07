<?php

namespace App\Class\Practical;

class Boc implements Payment
{


    public function __construct($name)
    {
        return $name;
    }
    public function Process($amount)
    {
        return $amount;
    }
}
