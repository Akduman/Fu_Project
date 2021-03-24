<?php

namespace App\Models;

use App\Http\Resources\DepartmentCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Department extends BaseModel
{
    use HasFactory;
    protected $auth_level=0;
    protected $fillable=['name'];

    
    public function f_s_a_form()
    {
        return $this->hasMany(f_s_a_form::class,'department_id');
    }  

    public function form_30()
    {
        return $this->hasMany(Form_30::class,'department_id');
    } 
    

    public function request_query(Request $request)
    {   
     
        $querry=Department::query();                  

        if ($request->q) {
            $querry->where('name','like','%'.$request->q.'%') ;        
           }
        /// şimdilik hata düzeltildi   
        if (!$request->has('all')) {            
            $data=$querry->get();
            return new DepartmentCollection($data);
        }else {
 
            $request=$this->check_query_limit($request);
            $data=$querry->offset($request->bot_limit-1)->limit($request->top_limit)->get();
            return new DepartmentCollection($data);
        }          
    }


    public function GetAllDepartment_with_fsa()
    {
        $data = DB::table('departments')
        ->selectRaw('departments.id as department_id, departments.name as department_name,  f_s_a_forms.id as form_id, f_s_a_forms.name_surname, f_s_a_forms.email as user_email')
        ->join('f_s_a_forms', 'departments.id', '=', 'f_s_a_forms.department_id') 
        ->orderBy('departments.name')                      
        ->get();
        return $data;
    }

    public function GetDepartment_with_fsa(Request $request)
    {
        
        $data = DB::table('departments')
        ->selectRaw('departments.id as department_id, departments.name as department_name,  f_s_a_forms.id as form_id, f_s_a_forms.name_surname, f_s_a_forms.email as user_email')
        ->join('f_s_a_forms', 'departments.id', '=', 'f_s_a_forms.department_id') 
        ->where('f_s_a_forms.department_id', Auth::user()->department_id);//->orWhere('email','like','%'.$request->name.'%')
        if ($request->q) {
        $data=$data->Where('email','like','%'.$request->q.'%');
        }
        $data=$data->orderBy('departments.name')->get();
        return $data;
    }

    public function GetDepartment_with_users(Request $request)
    {
     
        $data = DB::table('users')
        ->selectRaw('name_surname,id')      
        ->where('department_id',$request->id)
        ->orderBy('department_id')
        ->get();
        return $data;   
       
    }
    



}
