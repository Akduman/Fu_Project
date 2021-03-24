<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form_30 extends BaseModel
{
    use HasFactory;

    protected $hidden = [
        'token',        
    ];

    protected $fillable = [
      //  'token',
        'name_surname',
        'student_no',
        'department_id',
        'sub_department',
        'advisor_id',
        'tr_title',
        'en_title',
        'language',
        'exp',
        'teo',
        'sim',
        'sys_dev',
        'analys',
        'industrial_sector', 
        'permission_1',
        'permission_2',     
        'permission_3',
        'form_32',
        'token',
    ];


}
