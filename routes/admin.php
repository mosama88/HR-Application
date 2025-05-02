<?php

use App\Http\Controllers\Dashboard\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Settings\AdminPanelSettingController;


Route::get('/login', [AdminController::class, 'index'])->name('login');
Route::post('/login', [AdminController::class, 'strore'])->name('login');
Route::resource('admin_panel_settings', AdminPanelSettingController::class);
