<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class F_s_a_formStoreRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name_surname'=>'required|max:50',   
            'email'=>'required|email',
            'phone'=>'required|max:11|min:10',
            'passport'=>'required|mimes:pdf',  
            'transcript'=>'required|mimes:pdf',  
            'graduation_document'=>'required|mimes:pdf', 
            'graduation_average'=>  'required|between:0,100',
            'language_document'=>'required|mimes:pdf', 
            'explanation'=>'max:250',  
            'department_id'=>'required'             
        ];
    }
}
