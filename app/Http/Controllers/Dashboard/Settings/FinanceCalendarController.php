<?php

namespace App\Http\Controllers\Dashboard\Settings;

use DateTime;
use DatePeriod;
use DateInterval;
use Illuminate\Http\Request;
use App\Models\FinanceCalendar;
use App\Models\FinanceClnPeriod;
use App\Models\AdminPanelSetting;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Enums\FinanceCalendarsIsOpen;
use App\Services\FinanceCalendarService;
use App\Http\Requests\Dashboard\Settings\FinanceCalendarRequest;
use Illuminate\Database\Eloquent\Collection;

class FinanceCalendarController extends Controller
{

    public function __construct(protected FinanceCalendarService $financeCalendarService) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->financeCalendarService->index();
        return view('dashboard.settings.financeCalendars.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.settings.financeCalendars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FinanceCalendarRequest $request, FinanceCalendar $financeCalendar)
    {

        $com_code = Auth::user()->com_code;
        $validateData = $request->validated();
        $dataToInsert = array_merge($validateData, [
            'is_open' => FinanceCalendarsIsOpen::Pending,
            'com_code' => $com_code,
            'created_by' => Auth::user()->id,
        ]);

        $savedFinanceCalendar = $financeCalendar->create($dataToInsert);

        return redirect()->route('dashboard.financeCalendars.index')->with('success', 'تم أضافة السنه المالية بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(FinanceCalendar $financeCalendar)
    {
        return view('dashboard.settings.financeCalendars.show', compact('financeCalendar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FinanceCalendar $financeCalendar)
    {
        return view('dashboard.settings.financeCalendars.edit', compact('financeCalendar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FinanceCalendar $financeCalendar)
    {
        $financeCalendar->delete();
        return response()->json([
            'success' => true,
            'message' => 'تم حذف السنه المالية بنجاح'
        ]);
    }
}