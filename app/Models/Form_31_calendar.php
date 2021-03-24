<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form_31_calendar extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'packed', 
        'begin' ,
        'end' ,
        'form_31_id'
    ];
}
