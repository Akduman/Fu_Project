<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Form_33StoreRequest;
use App\Http\Requests\Form_33StoreRequest_test;
use App\Models\Form_33;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class Form_33Controller extends Controller
{

    public $Data; 

    public function __construct()
    {
      //  $this->middleware('auth.basic')->except(['index','show']);
        $this->Data = new Form_33();
      
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
    public function store(Form_33StoreRequest $request)
    {
        // değerleri kontrole et  true; hata var false; devam et bekeleme yapma
        // a=>5
        // b=>10
        // a+b < 50
        if ($result=$request->validate_test()) {
            return $this->valid_Response($result);
        }
        
        $input=$request->all();
        return $this->api_Response($this->Data::create($input)->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Form_33 $form_33)
    {
        return $this->api_Response($form_33);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form_33 $form_33)
    {       
        $form_33->delete();   
        return $this->api_Response($form_33->id,'Succes Destroy',200);
    }


    public function test(Form_33StoreRequest_test $request)
    {

        if ($result=$request->validate_test()) {
            return $this->valid_Response($result);
        } 

        $input=$request->all();
        return $this->api_Response($input);

    }    


}
