<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaseModel extends Model
{
    use HasFactory;
   // public $authority=0;
    public function check_query_limit(Request $request)
    {
       $request->bot_limit=$request->bot_limit ? $request->bot_limit:1;
       $request->top_limit=$request->top_limit ? $request->top_limit:10;       
       return $request;
    }

    
    public function Is_Auth()
    {
        if (Auth::user()->authority<=$this->auth_level) {
            return true; //$this->api_Response(Auth::user()->authority,'Unauthorized Transaction',401);
        } 
        else {
            return false;
        }
    }

}
