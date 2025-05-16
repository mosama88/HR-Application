<?php

namespace App\Http\Controllers\Dashboard\Settings;


use DateTime;
use DatePeriod;
use DateInterval;
use Illuminate\Http\Request;
use App\Models\FinanceCalendar;
use App\Models\FinanceClnPeriod;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Enums\FinanceCalendarsIsOpen;
use App\Services\FinanceCalendarService;
use App\Http\Requests\Dashboard\Settings\FinanceCalendarRequest;
use Carbon\Month;

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


        $dataToInsert = $this->financeCalendarService->store($request, $financeCalendar);

        $financeCalendar->create($dataToInsert);

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
    public function update(FinanceCalendarRequest $request, FinanceCalendar $financeCalendar)
    {
        $com_code = Auth::user()->com_code;
        $validatedData = $request->validated();

        // تحديث السنة المالية
        $dataToInsert = array_merge($validatedData, [
            'is_open' => FinanceCalendarsIsOpen::Pending,
            'com_code' => $com_code,
            'updated_by' => Auth::user()->id,
        ]);

        $financeCalendar->update($dataToInsert);

        return redirect()->route('dashboard.financeCalendars.index')->with('success', 'تم تعديل السنة المالية بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FinanceCalendar $financeCalendar)
    {
        FinanceClnPeriod::where('finance_calendar_id', $financeCalendar->id)->delete();

        $financeCalendar->delete();

        return response()->json([
            'success' => true,
            'message' => 'تم حذف السنه المالية بنجاح'
        ]);
    }
}
