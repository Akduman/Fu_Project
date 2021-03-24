<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Form_30StoreRequest;
use App\Http\Requests\Form_31StoreRequest;
use App\Models\Form_30;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Form_30Controller extends Controller
{

    public $Data; 

    public function __construct()
    {
      //  $this->middleware('auth.basic')->except(['index','show']);
        $this->Data = new Form_30();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        return $this->api_Response($this->Data->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Form_30StoreRequest $request)
    {          
       
        if ($result=$request->validate_test()) {
            return $this->valid_Response($result);
        } 
        $input=$request->all();  

        // $input['token']='test_pilendin';
       return $this->api_Response($this->Data::create($input)->id);

     // return $this->api_Response('test');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Form_30 $form_30)
    {
        return $this->api_Response($form_30);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Form_30 $form_30, Form_31StoreRequest $request)
    {
        // auth Lazım!
        $form_30->update($request->all());

        return $this->api_Response($request->all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form_30 $form_30)
    {        
        $form_30->delete();
        return $this->api_Response($form_30->id,'Success Destroy',200);
    }
}
