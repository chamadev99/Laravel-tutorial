<?php

namespace App\Providers;

use App\Repositories\OrderRepositoryInterface;
use App\Repositories\OrderRepository;
use App\Models\Sanctum\PersonalAccessToken;
use Laravel\Sanctum\Sanctum;

use App\Class\User;
use App\Interface\UserInterface;
use App\Services\AiService;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {   //echo "service provider 1";
        // $this->app->bind(AiService::class,function(){
        //     return new AiService(new Client(),"key1233");
        // });

        // $this->app->bind(UserInterface::class,User::class);

        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
        View::share('test_view', "chamath  view");
    }
}
