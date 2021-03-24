<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Barryvdh\DomPDF\PDF as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    public $Data;
    public function __construct()
    {
        $this->middleware('auth.basic')->except(['check_login','show','test_pdf']);
        $this->Data = new User();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($this->Data->Is_Auth()==false) {
             return $this->api_Response(Auth::user()->id,'Unauthorized Transaction',401);
        }
        $data=$this->Data->get();
        return $this->api_Response($data,'Success',200);
    }

    public function check_login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return $this->api_Response('true','Success',200);
        }
        else {
            return $this->api_Response('false','Unauthorized Transaction',200);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {

        if ($this->Data->Is_Auth()==false) {
            return $this->api_Response(Auth::user()->id,'Unauthorized Transaction',401);
        }
        $input=$request->all();
        //////
        //nesne oluşturup eşleyipte yapabilirsin
        $data =new User();
        $data->name_surname=$request->name_surname;
        $data->authority=$request->authority;
        $data->email=$request->email;
        $data->department_id=$request->department_id;
        $data->password=bcrypt($request->password);
        $data->api_token=Str::random(10);
        $data->remember_token=Str::random(10);
        $data->save();
        //User::create($input);

        return $this->api_Response($input,'User created',201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
      /*  /// şuan sadece kendini gösteriyor
        if (Auth::user()->id!=$user->id) {
            return $this->api_Response(Auth::user()->id,'Unauthorized Transaction',401);
        }*/
        return $this->api_Response($user,'User information',200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserStoreRequest $request, User $user)
    {
        if ($this->Data->Is_Auth()==true || Auth::user()->id==$user->id) {
          //  $data =new User();
            $user->name_surname=$request->name_surname;
            $user->authority=$request->authority;
            $user->email=$request->email;
            $user->department_id=$request->department_id;
            $user->password=bcrypt($request->password);
            $user->api_token=Str::random(10);
            $user->remember_token=Str::random(10);
            $user ->save();
        }
        return $this->api_Response(Auth::user()->id,'User update success',200);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    public function destroy(User $user)
    {
        if ($this->Data->Is_Auth()==false) {
            return $this->api_Response(Auth::user()->id,'Unauthorized Transaction',401);
        }
        $user->delete();
        return $this->api_Response($user,'Success destroy',200);
    }

    public function create_context_pdf(Request $request)
    {
        
    }
    public function test_pdf(Request $request1)
    {
        $request='****$R****';
        $pdf = App::make('dompdf.wrapper');        

        $pdf->loadHTML(view('pdf_template30',compact('request')));
     

        return $pdf->stream();
 
    }




}
