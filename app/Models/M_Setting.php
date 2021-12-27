<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Setting extends Model
{

    protected $table = "tbl_setting";
    
    protected $fillable = [
        'caps_setting',
        'setting_name',
        'value'
    ];
    
}
