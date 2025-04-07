<?php

namespace App\Class;


class Developer extends Abstraction
{
    public function MakeSound()
    {
        return "this is coding" . $this->name;
    }
}
