<?php

namespace App\Class\Practical;

class QA extends Employee implements calSalary
{
    public function __construct($name, $postion, $salary)
    {
        parent::__construct($name, $postion, $salary);
    }


    public function bornCity()
    {
        return "Colombo";
    }

    public function department()
    {
        return "Quality Assurance Department";
    }

    public function calSalary()
    {
        return $this->getSalary() + 1500;
    }
}
