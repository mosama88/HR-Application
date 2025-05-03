<?php

use App\Http\Controllers\Dashboard\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Settings\AdminPanelSettingController;


Route::middleware(['auth:admin'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index')->middleware('redirect.employee');
});



Route::resource('admin_panel_settings', AdminPanelSettingController::class);