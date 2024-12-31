<?php

namespace App\Class;

use App\Interface\UserInterface;

class UserInfo
{
    /**
     * Create a new class instance.
     */

    private $userInterface;
    public function __construct(UserInterface $userInterface)
    {
        $this->userInterface = $userInterface;
    }


    public function getUserName(): string
    {
        return $this->userInterface->getUserName();
    }
}
