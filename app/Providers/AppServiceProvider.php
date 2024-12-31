<?php

namespace App\Providers;

use App\Class\User;
use App\Interface\UserInterface;
use App\Services\AiService;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {   //echo "service provider 1";
        $this->app->bind(AiService::class,function(){
            return new AiService(new Client(),"key1233");
        });

        $this->app->bind(UserInterface::class,User::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
