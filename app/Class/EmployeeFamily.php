<?php

namespace App\Class;

class EmployeeFamily extends Employee
{

    private $familyName;
    private $wifeName;
    private $work;

    public function __construct($family, $wife)
    {
        parent::__construct("chamath", "developer", 1000); //inherit call parent class
        $this->familyName = $family;
        $this->wifeName = $wife;
    }

    public function setEmpName($name)
    {
        $this->setName($name);
    }

    public function familyInfo()
    {

        echo "Employee Name: " . $this->getName() .  PHP_EOL;; //parent class function
        echo "Employee age: " . $this->age . PHP_EOL;; //get public property from parent class
        echo "Family Name: " . $this->familyName . "\n";
        echo "Wife Name: " . $this->wifeName . "\n";
    }
    public function work() //polymorphism implement same function in different class
    {
        return "home";
    }
}
