<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Form_31StoreRequest extends FormRequest
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

    public function valid_check()
    {
        

    }

    public function validate_test()
    {        
      

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
            'program' => 'required|max:1',
            'purpose' => 'required|max:300',
            'requirement_1' => 'required|max:300',
            'requirement_2' => 'required|max:300',
            'requirement_3' => 'required|max:300',
            'subject_scope_1' => 'required|max:300',
            'subject_scope_2' => 'required|max:300',
            'method' => 'required|max:300',
            'org_val' => 'required|max:300',
            'effect' => 'required|max:300',
            'addicted' => 'required|max:300',
            'form_30_id' => 'required|unique:form_31s',
            /// resource kontrol edilecek
        ];
    }
}
