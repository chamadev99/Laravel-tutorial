<?php

namespace App\Class;

class Employee
{
    private $name;
    private $position;
    private $salary;
    protected $age = 50;

    public function __construct($name, $position, $salary)
    {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
        //  $this->age = 50;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPosition($position)
    {
        $this->position = $position;
    }
    public function getPosition()
    {
        return $this->position;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function displayInfo()
    {
        echo "Name: " . $this->name . "\n";
        echo "Position: " . $this->position . "\n";
        echo "Salary: " . $this->salary . "\n";
    }

    public function work() //polymorphism implement same function in different class
    {
        return "office";
    }
}
