<?php

namespace App\Enums;

enum FinanceCalendarsIsOpen: int
{
    case Pending = 0;
    case Open = 1;
    case Archived = 2;
}