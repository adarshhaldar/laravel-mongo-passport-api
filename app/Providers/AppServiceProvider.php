<?php

namespace App\Providers;

use App\Models\MongoAuthCode;
use App\Models\MongoClient;
use App\Models\MongoPersonalAccessClient;
use App\Models\MongoRefreshToken;
use App\Models\MongoToken;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Passport::useAuthCodeModel(MongoAuthCode::class);
        Passport::useClientModel(MongoClient::class);
        Passport::usePersonalAccessClientModel(MongoPersonalAccessClient::class);
        Passport::useRefreshTokenModel(MongoRefreshToken::class);
        Passport::useTokenModel(MongoToken::class);
    }
}
