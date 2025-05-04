<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\AdminPanelSettingRepository;
use App\Repositories\Interfaces\AdminPanelSettingInterface;

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
        app()->bind(AdminPanelSettingInterface::class, AdminPanelSettingRepository::class);
    }
}