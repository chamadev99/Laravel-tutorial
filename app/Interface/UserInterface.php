<?php

namespace App\Interface;

interface UserInterface
{
    public function getUserName():string;
    public function getUserEmail():string;
    public function getUserAge():int;
}
