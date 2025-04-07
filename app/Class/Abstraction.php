<?php

namespace App\Class;

abstract class Abstraction
{
    private $name = "chamath";


    abstract public function MakeSound();

    protected function getName()
    {
        return $this->name;
    }

    public function sleep()
    {
        return " then sleep";
    }
}
