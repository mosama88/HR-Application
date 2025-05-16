<?php

namespace App\Models;

use App\Enums\FinanceCalendarsIsOpen;
use Illuminate\Database\Eloquent\Model;
use App\Observers\FinanceCalendarObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

#[ObservedBy([FinanceCalendarObserver::class])]

class FinanceCalendar extends Model
{
    use HasFactory;

    protected $table = 'finance_calendars';
    protected $casts = [
        'is_open' => FinanceCalendarsIsOpen::class,
    ];
    protected $fillable = [
        'finance_yr',
        'finance_yr_desc',
        'start_date',
        'end_date',
        'is_open',
        'com_code',
        'created_by',
        'updated_by',
    ];

    public function FinanceClnCalendar()
    {
        return $this->belongsTo(FinanceClnPeriod::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Admin::class, 'updated_by');
    }
}
