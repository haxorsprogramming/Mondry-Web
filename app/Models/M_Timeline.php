<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Timeline extends Model
{
    protected $table = "tbl_timeline";
    
    protected $fillable = [
        'token',
        'username',
        'event',
        'deks'
    ];
}
