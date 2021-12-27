<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_User extends Model
{
    
    protected $table = "tbl_user";

    protected $fillable = [
        'username',
        'role',
        'id_branch',
        'password',
        'api_token',
        'active'
    ];

}
