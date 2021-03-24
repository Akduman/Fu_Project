<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use PhpParser\JsonDecoder;

class Form_33StoreRequest_test extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function valid_unique()
    {
        if ($this->chairman_id==$this->invitation_1 || 
        $this->invitation_1==$this->invitation_2|| 
        $this->chairman_id==$this->invitation_2){
            return true;
        }
        return false;
    }


    public function check_department()
    {
        $data = DB::table('form_31s')
        ->selectRaw('form_30s.department_id, form_30s.id ,form_30s.name_surname')     
       // ->join('form_31s', 'form_33s.form_31_id', '=', 'form_31s.id')
        ->join('form_30s', 'form_31s.form_30_id', '=', 'form_30s.id')
        ->where('form_31s.id',$this->form_31_id)
        ->get();
        $test = json_decode($data, true);
        
        

        $a=5;
        try {
            $result = $test[0]['department_id'];
        } catch (\Throwable $th) {
            return true;
        }   

    //    return $result ;

        if (User::find($this->chairman_id)->department_id!=$result) 
            { return true;}
        if (User::find($this->invitation_1)->department_id!=$result) 
            { return true;}
        if (User::find($this->invitation_2)->department_id!=$result) 
            { return true;}

        return false;

    }

    public function validate_test()
    {        
        if ($this->valid_unique()) {
            return 'valid_unique';
        }       

        if ($this->check_department()) {
           return 'check_department';
        }

        return false;

    }

    public function rules()
    {
        //filtre 1 
        return[
            'location'=> 'required', 
            'chairman_id'=> 'required|integer', 
            'invitation_1'=> 'required|integer',
            'invitation_2'=> 'required|integer',
            'form_31_id'=> 'required|unique:form_33s',             
        ];
    }
}
