<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form_31 extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'program', 
        'purpose', 
        'requirement_1' ,
        'requirement_2' ,
        'requirement_3' ,
        'subject_scope_1' ,
        'subject_scope_2', 
        'method' ,
        'org_val' ,
        'effect' ,
        'addicted' ,
        'form_30_id'

    ];
}
