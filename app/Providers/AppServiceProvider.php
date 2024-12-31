<?php

namespace App\Providers;

use App\Services\AiService;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {   echo "service provider 1";
        $this->app->bind(AiService::class,function(){
            return new AiService(new Client(),"key1233");
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
