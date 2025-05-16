<?php

namespace App\Repositories\Interfaces;

use App\Models\FinanceCalendar;
use App\Http\Requests\Dashboard\Settings\FinanceCalendarRequest;

interface FinanceCalendarInterface
{
    public function getData();
    public function storeData(FinanceCalendarRequest $request, FinanceCalendar $financeCalendar);
}