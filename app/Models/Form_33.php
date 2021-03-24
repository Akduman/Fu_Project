<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form_33 extends Model
{
    use HasFactory;

    protected $fillable = [
        'location', 
        'chairman_id', 
        'invitation_1',
        'invitation_2' ,
        'form_31_id' ,
    ];
}
