<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Laundry_Card extends Model
{
    protected $table = "tbl_laundry_Card";

    protected $fillable = [
        'id_card',
        'id_branch',
        'id_customer',
        'username_employee',
        'status',
        'status_payment',
        'active'
    ];
}
