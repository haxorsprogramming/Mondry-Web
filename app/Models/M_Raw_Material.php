<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Raw_Material extends Model
{
    protected $table = "tbl_raw";

    protected $fillable = [
        'id_raw',
        'ord',
        'raw_name',
        'unit',
        'deks',
        'id_branch',
        'stock',
        'active'
    ];
}
