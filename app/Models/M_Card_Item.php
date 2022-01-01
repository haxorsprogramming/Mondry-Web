<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Card_Item extends Model
{
    protected $table = "tbl_card_item";
    
    protected $fillable = [
        'id_card',
        'id_service_item',
        'price_at',
        'qt',
        'total',
        'active'
    ];
}
