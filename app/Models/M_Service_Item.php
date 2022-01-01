<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Service_Item extends Model
{
    protected $table = "tbl_service_item";
    
    protected $fillable = [
        'id_item',
        'row',
        'id_branch',
        'name',
        'deks',
        'unit',
        'type',
        'active'
    ];

}
