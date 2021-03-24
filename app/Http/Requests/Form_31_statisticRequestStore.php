<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Form_31_statisticRequestStore extends FormRequest
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
            'statistic_1' =>  'required|bool',
            'statistic_2' =>  'required|bool',
            'statistic_3' =>  'required|integer|between:1,100',
            'statistic_4' =>  'required|bool',
            'statistic_5' =>  'required|integer|between:1,100',
            'statistic_6' =>  'required|bool',
            'statistic_7' =>  'required|bool',
            'statistic_8' =>  'required|integer|between:1,100',
            'statistic_9' =>  'required|integer|between:1,100',
            'statistic_10' =>  'required|bool',
            'statistic_11' =>  'required|bool',
            'statistic_12' =>  'required|integer|between:1,100',
            'statistic_13' =>  'required|integer|between:1,100',
            'statistic_14' =>  'required|integer|between:0,3',
            'statistic_15' =>  'required|bool',
            'statistic_16' =>  'required|max:250',
            
        ];
    }
}
