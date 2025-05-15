<?php

namespace App\Enums;

enum FinanceCalendarsIsOpen: int
{
    case Pending = 0;
    case Active = 1;
    case Archived = 2;
}
