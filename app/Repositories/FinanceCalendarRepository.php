<?php

namespace App\Repositories;

use App\Models\FinanceCalendar;
use App\Models\AdminPanelSetting;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use App\Enums\PanelSettingSystemStatusEnum;
use App\Repositories\Interfaces\FinanceCalendarInterface;
use App\Http\Requests\Dashboard\Settings\FinanceCalendarRequest;

class FinanceCalendarRepository implements FinanceCalendarInterface
{


    public function getData()
    {
        $com_code = Auth::user()->com_code;
        $data =  FinanceCalendar::where('com_code', $com_code)->paginate(10);
        return $data;
    }


    // public function updateData(FinanceCalendarRequest $request, FinanceCalendar $financeCalendar) {
        
    // }
}