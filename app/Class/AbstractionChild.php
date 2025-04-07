<?php

namespace App\Class;

class AbstractionChild extends Abstraction
{


    public function MakeSound()
    {
        return "this is  method implement in child class" . $this->getName();
    }
}
