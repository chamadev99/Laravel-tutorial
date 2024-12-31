<?php

namespace App\Http\Controllers;

use App\Class\User;
use App\Class\UserInfo;

class UserController extends Controller
{
    private $user;
    private $userInfo;

    public function __construct(User $user ,UserInfo $userInfo)
    {
        $this->user = $user;
        $this->userInfo = $userInfo;
    }


    public function getUserName()
    {
        return $this->userInfo->getUserName() . "<br>" .
               $this->user->getUserEmail() . "<br>" .
               $this->user->getUserAge();
    }
    
    
}
