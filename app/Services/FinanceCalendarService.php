<?php

namespace App\Services;

use App\Models\FinanceCalendar;
use App\Repositories\Interfaces\FinanceCalendarInterface;
use App\Http\Requests\Dashboard\Settings\FinanceCalendarRequest;


class FinanceCalendarService
{
    public function __construct(protected FinanceCalendarInterface $repository) {}

    public function index()
    {
        return $this->repository->getData();
    }

    public function store($request)
    {
        return $this->repository->storeData($request);
    }

    public function show(FinanceCalendar $financeCalendar)
    {
        try {
            $financeClnPeriods = $this->repository->showData($financeCalendar);
            if ($financeClnPeriods->isEmpty()) {
                throw new \Exception('!عفوآ لقد حدث خطأ ما'); // Or use a custom exception
            }
            return $financeClnPeriods;
        } catch (\Exception $e) {
            return redirect()
                ->route('dashboard.financeCalendars.index')
                ->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update($request, FinanceCalendar $financeCalendar)
    {
        return $this->repository->updateData($request, $financeCalendar);
    }

    public function destroy(FinanceCalendar $financeCalendar)
    {
        return $this->repository->deleteData($financeCalendar);
    }
}
