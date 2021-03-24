<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class F_s_a_formGuestResource extends JsonResource
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
            'department_id'=>$this->department_id,   
            'created_at'=>$this->created_at, 
            'status'=> $this->status               
        ];
    }
}
