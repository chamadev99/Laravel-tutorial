<?php

namespace App\Class;

use App\Interface\UserInterface;
use Ramsey\Uuid\Type\Integer;

class User implements UserInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getUserName(): string
    {
        return "chamath user info";
    }

    public function getUserEmail(): string
    {
        return "Chamarox123@gmail.com";
    }

    public function getUserAge(): int
    {
        return 32;
    }
}
