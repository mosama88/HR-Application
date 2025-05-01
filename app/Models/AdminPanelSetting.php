<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminPanelSetting extends Model
{
    use HasFactory;

    protected $table = 'admin_panel_settings';

    protected $fillable = [];

    // public function {{name}}()
    // {
    //     return $this->belongsTo({{model}}::class, {{culomn}});
    // }
}