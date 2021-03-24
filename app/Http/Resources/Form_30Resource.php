<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Form_30Resource extends JsonResource
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
            'form_30_id'=>$this->id
        ];
    }
}
