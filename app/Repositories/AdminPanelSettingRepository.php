<?php

namespace App\Repositories;

use App\Models\AdminPanelSetting;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use App\Enums\PanelSettingSystemStatusEnum;
use App\Repositories\Interfaces\AdminPanelSettingInterface;

class AdminPanelSettingRepository implements AdminPanelSettingInterface
{


    public function getData()
    {
        $com_code = Auth::user()->com_code;
        $data = AdminPanelSetting::where('com_code', $com_code)->where('system_status', PanelSettingSystemStatusEnum::Active)->first();
        if (!$data) {
            return redirect()->back()->withErrors(['error' => 'لا توجد أعدادت الشركة للموظف'])->withInput();
        }
        return $data;
    }
}