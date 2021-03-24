<?php

namespace App\Models;

use App\Http\Resources\F_s_a_formCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class F_s_a_form extends BaseModel
{
    use HasFactory;

    protected $fillable=['name_surname','email','phone','passport','transcript','graduation_document','explanation','language_document','department_id'];

    public function department()
    {
        return $this->belongsTo(Department::class);
      
    }

    public function request_query(Request $request)
    {    
        $querry=F_s_a_form::query();                  

        if ($request->q) {
            $querry->where('name','like','%'.$request->q.'%') ;        
           }
           
        if ($request->has('all')) {            
            $data=$querry->get();
            return new F_s_a_formCollection($data);
        }else { 
            $request=$this->check_query_limit($request);
            $data=$querry->offset($request->bot_limit-1)->limit($request->top_limit)->get();
            return new F_s_a_formCollection($data);
        }          
    }

    public function upload_file($file_orgin,$type_file)//$request->passport
    {
            $file=$file_orgin;
            $fileNameWithExtension=$type_file.uniqid().'.'.$file_orgin->getClientOriginalExtension();
            if ($file->move(public_path('uploads/FSAformfiles'),$fileNameWithExtension)) {
                $fileUrl=url('uploads/FSAformfiles/'.$fileNameWithExtension);
                return ($fileUrl); 
    }
}
}