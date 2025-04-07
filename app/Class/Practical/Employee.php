<?php

namespace App\Class\Practical;

abstract class Employee
{
    private $name, $position, $salary;

    public function __construct($name, $posstion, $salary)
    {
        $this->name = $name;
        $this->position = $posstion;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getPosition()
    {
        return $this->position;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setPosition($position)
    {
        $this->position = $position;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    abstract public function calSalary();


    public function displayDetails()
    {
        echo "Name: " . $this->getName() . "<br>";
        echo "Position: " . $this->getPosition() . "<br>";
        echo "Salary: " . $this->getSalary() . "<br>";
    }
}
