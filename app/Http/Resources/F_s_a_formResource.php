<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class F_s_a_formResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'form_id'=>$this->id,
            'name_surname'=>$this->name_surname,   
            'email'=>$this->email,   
            'phone'=>$this->phone,   
            'passport'=>$this->passport,   
            'transcript'=>$this->transcript,   
            'graduation_document'=>$this->graduation_document, 
            'explanation'=>$this->explanation,  
            'department_id'=>$this->department_id,   
            'created_at'=>$this->created_at,  
            'status'=> $this->status            
        ];
    }
}
