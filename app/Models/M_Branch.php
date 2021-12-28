<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Branch extends Model
{
    protected $table = "tbl_branch";

    protected $fillable = [
        'id_branch',
        'branch_name',
        'username_manager',
        'address',
        'owner_name',
        'phone_number',
        'main_branch',
        'status',
        'active'
    ];

    public function employeeData()
    {
        return $this->belongsTo(M_Employee::class, 'username_manager', 'username');
    }

}
