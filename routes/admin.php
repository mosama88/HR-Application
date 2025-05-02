<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Settings\AdminPanelSettingController;



Route::resource('admin_panel_settings', AdminPanelSettingController::class);