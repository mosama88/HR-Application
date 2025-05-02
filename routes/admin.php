<?php

use App\Http\Controllers\Dashboard\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Settings\AdminPanelSettingController;

Route::controller(AdminController::class)->prefix('login')->middleware('guest')->group(function () {
    Route::get('/', 'index')->name('login');
    Route::post('/', 'store')->name('login');
});

Route::resource('admin_panel_settings', AdminPanelSettingController::class);
