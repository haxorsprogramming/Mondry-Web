<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Promo_Code extends Model
{
    protected $table = "tbl_promo_code";

    protected $fillable = [
        'id_code',
        'id_branch',
        'promo_name',
        'deks',
        'type',
        'value',
        'quota',
        'expired_on',
        'active'
    ];
}
