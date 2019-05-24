<?php

namespace App\Providers;
use Laravel\Passport\Passport;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Passport\Client;
use App\Models\Passport\Token;
use App\Models\Passport\AuthCode;
use App\Models\Passport\PersonalAccessClient;

class AppServiceProvider extends ServiceProvider
{
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
        Schema::defaultStringLength(191);
        $this->registerPolicies();

        Passport::routes();
        Passport::tokensExpireIn(now()->addDays(15));

        Passport::refreshTokensExpireIn(now()->addDays(30));
    
        Passport::personalAccessTokensExpireIn(now()->addMonths(6));
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
