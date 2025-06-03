<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\Settings\CityController;
use App\Http\Controllers\Dashboard\Settings\BranchController;
use App\Http\Controllers\Dashboard\Settings\CountryController;
use App\Http\Controllers\Dashboard\Settings\CurrencyController;
use App\Http\Controllers\Dashboard\Settings\LanguageController;
use App\Http\Controllers\Dashboard\Settings\BloodTypeController;
use App\Http\Controllers\Dashboard\Settings\DepartmentController;
use App\Http\Controllers\Dashboard\Settings\ShiftTypesController;
use App\Http\Controllers\Dashboard\Settings\GovernorateController;
use App\Http\Controllers\Dashboard\Settings\JobCategoryController;
use App\Http\Controllers\Dashboard\Settings\NationalityController;
use App\Http\Controllers\Dashboard\Settings\QualificationController;
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
    //################################### الدول ##################################
    Route::resource('countries', CountryController::class);
    //################################### اللغات ##################################
    Route::resource('languages', LanguageController::class);
    //################################### العملات ##################################
    Route::resource('currencies', CurrencyController::class);
    //################################### الادارات ##################################
    Route::resource('departments', DepartmentController::class);
    //################################### الوظائف ##################################
    Route::resource('job_categories', JobCategoryController::class);
    //################################### المؤهلات ##################################
    Route::resource('qualifications', QualificationController::class);
    //################################### فصيلة الدم ##################################
    Route::resource('bloodTypes', BloodTypeController::class);
    //################################### الجنسيات ##################################
    Route::resource('nationalities', NationalityController::class);
    //################################### المحافظات ##################################
    Route::resource('governorates', GovernorateController::class);
    //################################### المحافظات ##################################
    Route::resource('cities', CityController::class);
});
