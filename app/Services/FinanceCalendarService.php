<?php

namespace App\Services;

use App\Repositories\Interfaces\FinanceCalendarInterface;


class FinanceCalendarService
{
    public function __construct(protected FinanceCalendarInterface $repository) {}

    public function index()
    {
        return $this->repository->getData();
    }
}