<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Employee extends Model
{
    protected $table = "tbl_employee";

    protected $fillable = [
        'username',
        'role',
        'name',
        'address',
        'email',
        'phone_number',
        'id_branch',
        'active'
    ];

    public function roleData()
    {
        return $this->belongsTo(M_Role::class, 'role', 'kd_role');
    }

}
