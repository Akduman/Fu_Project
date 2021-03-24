<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class F_s_a_formCollection extends ResourceCollection
{

    public $collects='App\Http\Resources\F_s_a_formResource';
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data'=> $this->collection,
            'meta'=>[
                'total_department'=>$this->collection->count(),
                'custom'=>'value',                
            ],
        ];
    }
}
