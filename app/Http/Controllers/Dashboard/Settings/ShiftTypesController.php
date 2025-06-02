<?php

namespace App\Http\Controllers\Dashboard\Settings;

use App\Models\ShiftsType;
use Illuminate\Http\Request;
use App\Enums\ShiftTypesEnum;
use App\Enums\StatusActiveEnum;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Dashboard\Settings\ShiftsTypeRequest;

class ShiftTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $com_code = Auth::user()->com_code;
        $data = ShiftsType::where('com_code', $com_code)->orderByDesc('id')->paginate(10);
        return view('dashboard.settings.shiftTypes.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.settings.shiftTypes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ShiftsTypeRequest $request)
    {
        $com_code =  Auth::user()->com_code;
        $dataValidate = $request->validated();
        $dataInsert = array_merge($dataValidate, [
            'created_by' => Auth::user()->id,
            'com_code' => $com_code,
            'type' => ShiftTypesEnum::from((int) $dataValidate['type']),
            'active' => StatusActiveEnum::ACTIVE,
        ]);

        ShiftsType::create($dataInsert);
        return redirect()->route('dashboard.shiftTypes.index')->with('success', 'تم أضافة الشفت بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(ShiftsType $shiftsType)
    {
        return view('dashboard.settings.shiftTypes.show', compact('shiftsType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShiftsType $shiftsType)
    {
        return view('dashboard.settings.shiftTypes.edit', compact('shiftsType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ShiftsTypeRequest $request, ShiftsType $shiftsType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShiftsType $shiftsType)
    {
        //
    }
}