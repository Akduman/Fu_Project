<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class Form_30StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function check_advisor_department()
    {
        $data = DB::table('users')
        ->selectRaw('department_id, id')      
        ->where('id',$this->advisor_id)
        ->get();
        

        try {
        $result = $data[0]->department_id;
        }
        catch (\Throwable $th) {
             return true;
        }
        if ($result!=$this->department_id) {
            return true;
        }

        return false;

    }

    public function validate_test()
    {       
        if ($this->check_advisor_department()) {
            return 'check_advisor_department';
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {       
        return [
            'name_surname' => 'required',
            'student_no' => 'required',
            'department_id' => 'required',
            'sub_department' => 'required| max:250',
            'advisor_id' => 'required',
            'tr_title' => 'required',
            'en_title' => 'required',
            'language' => 'required|bool',
            'exp' => 'required|bool',
            'teo' =>  'required|bool',
            'sim' => 'required|bool',
            'sys_dev' => 'required|bool',
            'analys' => 'required|bool',
            'industrial_sector' => 'required|min:5|max:250', 
            'permission_1' => 'required|max:250|min:5',
            'permission_2' => 'required|max:250|min:5',     
            'permission_3' => 'required|max:250|min:5',         
             
        ];
    }
}
