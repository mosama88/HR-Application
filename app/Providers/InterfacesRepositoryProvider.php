<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\FinanceCalendarRepository;
use App\Repositories\AdminPanelSettingRepository;
use App\Repositories\Interfaces\FinanceCalendarInterface;
use App\Repositories\Interfaces\AdminPanelSettingInterface;

class InterfacesRepositoryProvider extends ServiceProvider
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
        app()->bind(AdminPanelSettingInterface::class, AdminPanelSettingRepository::class);
        app()->bind(FinanceCalendarInterface::class, FinanceCalendarRepository::class);
    }
}