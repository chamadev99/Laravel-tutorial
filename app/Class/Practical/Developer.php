<?php

namespace App\Class\Practical;


class Developer extends Employee implements calSalary
{
    public const amount = 1000;

    public function __construct()
    {
        parent::__construct("John Doe", "Software Engineer", 60000);
    }
    public function  bornCity()
    {
        return "New York";
    }

    public function setamount($amount)
    {
        return self::amount;
    }

    public function department()
    {
        return "Backend Department";
    }

    public function calSalary()
    {
        return $this->getSalary() + 2000;
    }
}
