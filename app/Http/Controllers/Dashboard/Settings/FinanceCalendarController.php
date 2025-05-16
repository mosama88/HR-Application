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

        $com_code = Auth::user()->com_code;
        $validateData = $request->validated();
        $dataToInsert = array_merge($validateData, [
            'is_open' => FinanceCalendarsIsOpen::Pending,
            'com_code' => $com_code,
            'created_by' => Auth::user()->id,
        ]);

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

        // خزن القيم القديمة لتتحقق منها بعد التحديث
        $oldStartDate = $financeCalendar->start_date;
        $oldEndDate = $financeCalendar->end_date;

        // تحديث السنة المالية
        $dataToInsert = array_merge($validatedData, [
            'is_open' => FinanceCalendarsIsOpen::Pending,
            'com_code' => $com_code,
            'updated_by' => Auth::user()->id,
        ]);

        $financeCalendar->update($dataToInsert);

        // تحقق هل تغيرت تواريخ البداية أو النهاية
        if ($oldStartDate != $request->start_date || $oldEndDate != $request->end_date) {
            // حذف الشهور القديمة المرتبطة بهذه السنة المالية
            FinanceClnPeriod::where('finance_calendar_id', $financeCalendar->id)->delete();

            // إنشاء الشهور الجديدة بناءً على التاريخ الجديد
            $startDate = new DateTime($request->start_date);
            $endDate = new DateTime($request->end_date);
            $endDate->modify('first day of next month'); // لضمان شمول آخر شهر

            $dateInterval = new DateInterval('P1M');
            $datePeriod = new DatePeriod($startDate, $dateInterval, $endDate);

            foreach ($datePeriod as $dateUpdate) {
                $dataMonth = [
                    'finance_calendar_id' => $financeCalendar->id,
                    'finance_yr' => $financeCalendar->finance_yr,
                    'year_and_month' => $dateUpdate->format('Y-m'),
                    'start_date_m' => $dateUpdate->format('Y-m-01'),
                    'end_date_m' => $dateUpdate->format('Y-m-t'),
                    'number_of_days' => (int)$dateUpdate->format('t'),
                    'start_date_fp' => $dateUpdate->format('Y-m-01'),
                    'end_date_fp' => $dateUpdate->format('Y-m-t'),
                    'com_code' => $com_code,
                    'created_by' => Auth::user()->id,
                    'updated_at' => now(),
                    'created_at' => now(),
                ];

                FinanceClnPeriod::create($dataMonth);
            }
        }

        return redirect()->route('dashboard.financeCalendars.index')->with('success', 'تم تعديل السنة المالية بنجاح');
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
