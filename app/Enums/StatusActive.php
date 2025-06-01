<?php

namespace App\Enums;

enum StatusActive: int
{
    case ACTIVE = 1;
    case INACTIVE = 0;

    public function label(): string
    {
        return match ($this) {
            self::ACTIVE => 'مفعل',
            self::INACTIVE => 'غير مفعل',
        };
    }
}