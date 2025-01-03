<?php

namespace App\Providers;

use App\Class\User;
use App\Interface\UserInterface;
use App\Services\AiService;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class PayamentProcessProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // $this->app->bind('exampleService', function () {
        //     return new \App\Services\AiService(new Client(),"test key");
        // });

        $this->app->bind(AiService::class,function(){
            return new AiService(new Client(),"key123s3");
        });

        $this->app->bind(UserInterface::class,User::class);
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
