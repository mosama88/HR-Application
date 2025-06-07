<?php

namespace App\Providers;

use App\Faker\CountryFacker;
use App\Faker\CurrencyFacker;
use App\Faker\LanguageFacker;
use App\Faker\DepartmentFacker;
use Illuminate\Support\ServiceProvider;

class FakerProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        fake()->addProvider(new CountryFacker(fake()));
        fake()->addProvider(new LanguageFacker(fake()));
        fake()->addProvider(new CurrencyFacker(fake()));
        fake()->addProvider(new DepartmentFacker(fake()));
    }
}
