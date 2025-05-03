<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\PanelSettingSystemStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminPanelSetting extends Model
{
    use HasFactory;

    protected $table = 'admin_panel_settings';

    protected $fillable = [
        'company_name',
        'system_status',
        'mobile',
        'address',
        'email',
        'max_hours_take_fp_as_addtional',
        'less_than_minute_neglecting_fp',
        'after_minute_calculate_delay',
        'after_minute_calculate_early_departure',
        'after_minute_quarterday',
        'after_time_half_daycut',
        'after_time_allday_daycut',
        'monthly_vacation_balance',
        'after_days_begin_vacation',
        'first_balance_begin_vacation',
        'sanctions_value_first_absence',
        'sanctions_value_second_absence',
        'sanctions_value_thaird_absence',
        'sanctions_value_forth_absence',
        'created_by',
        'updated_by',
        'com_code',

    ];

    public function createdBy()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Admin::class, 'updated_by');
    }



    protected $casts = [
        'system_status' => PanelSettingSystemStatusEnum::class,
    ];
}