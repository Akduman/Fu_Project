<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\F_s_a_formStoreRequest;
use App\Http\Resources\F_s_a_formResource;
use App\Models\F_s_a_form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class F_s_a_formController extends Controller
{

    public $Data;
    public function __construct()
    {
        $this->middleware('auth.basic')->except(['show','store']);
        $this->Data = new F_s_a_form();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data=$this->Data->request_query($request);
        return $this->api_Response($data,'Success',200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(F_s_a_formStoreRequest $request)
    {
        $data =new F_s_a_form();
        $data->name_surname=$request->name_surname;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->graduation_average=(($request->graduation_average)<=4) ? (($request->graduation_average)*100/4):$request->graduation_average;
        $data->passport=$this->Data->upload_file($request->passport,'passport');
        $data->transcript=$this->Data->upload_file($request->transcript,'transcript');
        $data->graduation_document=$this->Data->upload_file($request->graduation_document,'graduation');
        $data->language_document=$this->Data->upload_file($request->language_document,'language_document');
        $data->explanation=$request->explanation;
        $data->department_id=$request->department_id;
        $data->save();
        return $this->api_Response($data,'Success',201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\F_s_a_form  $f_s_a_form
     * @return \Illuminate\Http\Response
     */
    public function show(F_s_a_form $f_s_a_form)
    {
        return $this->api_Response(new F_s_a_formResource(F_s_a_form::find($f_s_a_form->id)),'Success',200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\F_s_a_form  $f_s_a_form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, F_s_a_form $f_s_a_form)
    {
        $f_s_a_form->status=$request->status;
        $f_s_a_form->save();
        return $this->api_Response($f_s_a_form,'Success',200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\F_s_a_form  $f_s_a_form
     * @return \Illuminate\Http\Response
     */
    public function destroy(F_s_a_form $f_s_a_form)
    {
        $f_s_a_form->delete();
        return $this->api_Response('From deleted','Success',200);
    }

    public function Auth_forms(Request $request)
    {
        $data = DB::table('departments')
        ->join('f_s_a_forms', 'departments.id', '=', 'f_s_a_forms.department_id')
        ->where('departments.id', Auth::user()->department_id);
        if ($request->has('q')) {
           $data=$data->where('email','like','%'.$request->q.'%');
        }
        $data=$data->orderBy('departments.id')
        ->get();
        return $data;
    }
}
