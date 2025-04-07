<?php

namespace App\Class\Practical;


class UIDeveloper extends Employee implements calSalary
{
    public function __construct()
    {
        parent::__construct("Chamath", "UI Developer", 50000);
    }

    public function  bornCity()
    {
        return "padukka";
    }

    public function department()
    {
        return "UI Department";
    }

    public function calSalary()
    {
        return $this->getSalary() + 1000;
    }
}
