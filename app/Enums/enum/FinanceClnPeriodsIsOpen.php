<?php

namespace App\Enums\enum;

enum FinanceClnPeriodsIsOpen: int
{
    case Pending = 0;
    case Open = 1;
    case Archived = 2;
}