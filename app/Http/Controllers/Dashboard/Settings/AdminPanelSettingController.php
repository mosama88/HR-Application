<?php

namespace App\Http\Controllers\Dashboard\Settings;

use Illuminate\Http\Request;
use App\Models\AdminPanelSetting;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Enums\PanelSettingSystemStatusEnum;
use App\Http\Requests\Dashboard\Settings\AdminPanelSettingRequest;

class AdminPanelSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $com_code = Auth::user()->com_code;
        $data = AdminPanelSetting::where('com_code', $com_code)->where('system_status', PanelSettingSystemStatusEnum::Active)->first();
        if (!$data) {
            return redirect()->back()->withErrors(['error' => 'لا توجد أعدادت الشركة للموظف'])->withInput();
        }
        return view('dashboard.settings.admin_panel_settings.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminPanelSetting $adminPanelSetting)
    {
        return view('dashboard.settings.admin_panel_settings.edit', compact('adminPanelSetting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminPanelSettingRequest $request, AdminPanelSetting $adminPanelSetting)
    {
        $com_code = Auth::user()->com_code;
        $adminPanelSettings = $request->validated();
        $dataUpdate =  array_merge(
            $adminPanelSettings,
            [
                'updated_by' => Auth::user()->id,
                'com_code' => $com_code,
            ]
        );
        $adminPanelSetting->update($dataUpdate);

        session()->flash('success', 'تم تعديل الشركة بنجاح');
        return redirect()->route('dashboard.admin_panel_settings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}