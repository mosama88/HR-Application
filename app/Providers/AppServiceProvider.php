<?php

namespace App\Providers;

use App\Faker\CountryFacker;
use App\Faker\CurrencyFacker;
use App\Faker\LanguageFacker;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;



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
        Paginator::useBootstrapFive();
        fake()->addProvider(new CountryFacker(fake()));
        fake()->addProvider(new LanguageFacker(fake()));
        fake()->addProvider(new CurrencyFacker(fake()));
    }
    
}