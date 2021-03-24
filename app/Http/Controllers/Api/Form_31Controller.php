<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Form_31_calanderRequestStore;
use App\Http\Requests\Form_31_statisticRequestStore;
use App\Http\Requests\Form_31StoreRequest;
use App\Models\Form_31;
use App\Models\Form_31_calander;
use App\Models\form_31_calendar;
use App\Models\Form_31_calendars;
use App\Models\Form_31_statistic;
use App\Models\Form_31_subject_scope_3;
use Illuminate\Http\Request;

class Form_31Controller extends Controller
{
    public $Data; 
    public $DataStatic;
    public $DataClander;
    public $DataSS;

    public function __construct()
    {
      //  $this->middleware('auth.basic')->except(['index','show']);
        $this->Data = new Form_31();
        $this->DataStatic = new Form_31_statistic();
        $this->DataClander = new form_31_calendar();
        $this->DataSS = new Form_31_subject_scope_3();
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
    //Form_31StoreRequest $request,
    public function store(Form_31StoreRequest $request,Form_31_statisticRequestStore $request2/*,Form_31_calanderRequestStore $request3*/)
    {

        $input=$request->all();
        
        $id=($this->Data::create($input)->id); 
        $input['form_31_id']=$id;     
        $this->DataStatic::create($input); 
       
     
        foreach ($input['scope'] as $key => $value) {
            if ($key>=15) {
                return $this->valid_Response('Too many scope!'); 
            }           
        }

        foreach ($input['calander'] as $key => $value) {
            if ($key>=10) {
                return $this->valid_Response('Too many calanders!');
            }
        }  

    
   
        foreach ($input['calander'] as $key => $value) {
            $input['calander'][$key]['form_31_id']=$input['form_31_id'];
            $this->DataClander::create($input['calander'][$key]);           
        }        
         

        
        foreach ($input['scope'] as $key => $value) {
            $input['scope'][$key]['form_31_id']=$input['form_31_id'];
            $this->DataSS::create($input['scope'][$key]);
        } 


        return $this->api_Response($input['form_31_id'],'Success',201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form_31  $form_31
     * @return \Illuminate\Http\Response
     */
    public function show(Form_31 $form_31)
    {
        return $this->api_Response($form_31);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form_31  $form_31
     * @return \Illuminate\Http\Response
     */
    public function update(Form_31StoreRequest $request, Form_31 $form_31)
    {
        $form_31->update($request->all());
        return $this->api_Response($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form_31  $form_31
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form_31 $form_31)
    {
        $form_31->delete();
        return $this->api_Response($form_31->id,'Succes Destroy',200);
    }
}
