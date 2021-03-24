<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentStoreRequest;
use App\Http\Resources\DepartmentResource;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public $Data;    
    public function __construct()
    {
        $this->middleware(['auth.basic'])->except(['index','show','getDepartment_with_users']);
        $this->Data = new Department();
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
    public function store(DepartmentStoreRequest $request)
    {
        if ($this->Data->Is_Auth()==false) {
            return $this->api_Response($request->all(),'Unauthorized Transaction',401);           
        }
      
        $input=$request->all();        
        Department::create($input);
        return $this->api_Response($input,'Department created',201);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        return $this->api_Response(new DepartmentResource(Department::find($department->id)),'Success',200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Department $department,DepartmentStoreRequest $request)
    {
        if ($this->Data->Is_Auth()==false) {
            return $this->api_Response($request->all(),'Unauthorized Transaction',401);
        }
    
        $input=$request->all();
        $department->update($input);     
        return $this->api_Response($input,'Success',200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {     
        if ($this->Data->Is_Auth()==false) {
            return $this->api_Response($department->id,'Unauthorized Transaction',401);
        }
      
        $department->delete();
        return $this->api_Response($department,'Success destroy',200);
    }

    public function getAllDepartment_with_fsa()
    {   
        if ($this->Data->Is_Auth()==false) {
            return $this->api_Response('Invalid','Unauthorized Transaction',401);
        }

        $data=$this->Data->GetAllDepartment_with_fsa(); 
        return $this->api_Response($data,'Success',200);
    }

    public function getDepartment_with_fsa(Request $request)
    {  
        if ($this->Data->Is_Auth()==false) {
            return $this->api_Response($request->all(),'Unauthorized Transaction',401);
        }

        $data=$this->Data->GetDepartment_with_fsa($request); 
        return $this->api_Response($data,'Success',200);
    }


    public function getDepartment_with_users(Request $request)
    {
        $data=$this->Data->GetDepartment_with_users($request);
        return $this->api_Response($data,'User information',200);
    }
}
