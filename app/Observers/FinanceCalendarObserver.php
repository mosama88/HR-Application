<?php

namespace App\Observers;

use DateTime;
use DatePeriod;
use DateInterval;
use App\Models\FinanceCalendar;
use App\Models\FinanceClnPeriod;
use Illuminate\Support\Facades\Auth;

class FinanceCalendarObserver
{
    /**
     * Handle the FinanceCalendar "created" event.
     */
    public function created(FinanceCalendar $financeCalendar): void
    {
        $com_code = Auth::user()->com_code;
        if ($financeCalendar) {
            $startDate = new DateTime($financeCalendar->start_date);
            $endDate = new DateTime($financeCalendar->end_date);
            $endDate->modify('first day of next month'); // To include the end date month in the period
            $dateInterval = new DateInterval('P1M'); // P1M = Period of 1 Month
            $datePeriod = new DatePeriod($startDate, $dateInterval, $endDate);

            foreach ($datePeriod as $date) {
                $dataMonth = [];
                $dataMonth['finance_calendar_id'] = $financeCalendar->id;
                $dataMonth['finance_yr'] = $financeCalendar->finance_yr;
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
        }
    }

    /**
     * Handle the FinanceCalendar "updated" event.
     */
    public function updated(FinanceCalendar $financeCalendar): void
    {
        //
    }

    /**
     * Handle the FinanceCalendar "deleted" event.
     */
    public function deleted(FinanceCalendar $financeCalendar): void
    {
        //
    }

    /**
     * Handle the FinanceCalendar "restored" event.
     */
    public function restored(FinanceCalendar $financeCalendar): void
    {
        //
    }

    /**
     * Handle the FinanceCalendar "force deleted" event.
     */
    public function forceDeleted(FinanceCalendar $financeCalendar): void
    {
        //
    }
}