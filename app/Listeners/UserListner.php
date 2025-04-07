<?php

namespace App\Listeners;

use App\Events\UserRegister;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserListner
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        info("jhgj");
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegister $event)
    {
        info("jhgj");
        return $event;
    }
}
