<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\Settings\BranchController;
use App\Http\Controllers\Dashboard\Settings\ShiftTypesController;
use App\Http\Controllers\Dashboard\Settings\FinanceCalendarController;
use App\Http\Controllers\Dashboard\Settings\AdminPanelSettingController;


Route::middleware(['auth:admin'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index')->middleware('redirect.employee');
    //################################### الأعدات #########################################
    Route::resource('admin_panel_settings', AdminPanelSettingController::class);
    //################################### السنوات المالية ##################################
    Route::resource('financeCalendars', FinanceCalendarController::class);
    //################################### الفروع ##################################
    Route::resource('branches', BranchController::class);
    //################################### الشفتات ##################################
    Route::resource('shiftTypes', ShiftTypesController::class);
});