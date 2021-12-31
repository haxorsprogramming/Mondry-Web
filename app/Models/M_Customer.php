<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Customer extends Model
{
    protected $table = "tbl_customer";

    protected $fillable = [
        'id_customer',
        'name',
        'address',
        'email',
        'phone_number',
        'id_branch',
        'active'
    ];
}
