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
}
