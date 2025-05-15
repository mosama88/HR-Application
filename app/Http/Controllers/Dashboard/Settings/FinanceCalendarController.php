<?php

namespace App\Http\Controllers\Dashboard\Settings;

use DateTime;
use DatePeriod;
use DateInterval;
use App\Models\Month;
use Illuminate\Http\Request;
use App\Models\FinanceCalendar;
use App\Models\FinanceClnPeriod;
use App\Models\AdminPanelSetting;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Enums\FinanceCalendarsIsOpen;
use App\Http\Requests\Dashboard\Settings\FinanceCalendarRequest;

class FinanceCalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $com_code = Auth::user()->com_code;
        $data = FinanceCalendar::where('com_code', $com_code)->paginate(10);
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

        if ($savedFinanceCalendar) {
            $insertdataOfFinanceCalendar = FinanceCalendar::select('id', 'finance_yr')->where('id', $savedFinanceCalendar->id)->first();

            $startDate = new DateTime($request->start_date);
            $endDate = new DateTime($request->end_date);
            $endDate->modify('first day of next month'); // To include the end date month in the period
            $dateInterval = new DateInterval('P1M'); // P1M = Period of 1 Month
            $datePeriod = new DatePeriod($startDate, $dateInterval, $endDate);

            foreach ($datePeriod as $date) {
                $dataMonth = [];
                $dataMonth['finance_calendar_id'] = $insertdataOfFinanceCalendar->id;
                $dataMonth['finance_yr'] = $insertdataOfFinanceCalendar->finance_yr;
                $dataMonth['start_date_m'] = $date->format('Y-m-01');
                $dataMonth['end_date_m'] = $date->format('Y-m-t');
                $dataMonth['year_and_month'] = $date->format('Y-m');
                $CalcnumOfDays = strtotime($dataMonth['end_date_m']) - strtotime($dataMonth['start_date_m']);
                $dataMonth['number_of_days'] = round($CalcnumOfDays / (60 * 60 * 24)) + 1;
                $dataMonth['com_code'] = $com_code;
                $dataMonth['updated_at'] = now();
                $dataMonth['created_at'] = now();
                $dataMonth['created_by'] = Auth::user()->id;
                $dataMonth['updated_by'] = Auth::user()->id;
                $dataMonth['start_date_fp'] = $dataMonth['start_date_m'];
                $dataMonth['end_date_fp'] = $dataMonth['end_date_m'];

                FinanceClnPeriod::insert($dataMonth);
            }
            return redirect()->route('dashboard.financeCalendars.index')->with('success', 'تم أضافة السنه المالية بنجاح');
        }
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
    public function edit(string $id)
    {
        //
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
