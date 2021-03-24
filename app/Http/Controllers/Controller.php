<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function api_Response($data='data',$message='Success',$code=200)
    {
        $response=['Response'=>$data, 'message'=>$message];
        return response()->json($response,$code);
    }


    protected function valid_Response($value='empty')
    {    
        $response=['message'=>'The given data was invalid.', 'error'=>'Something is wrong with this field!' ,'faild valid'=>$value];
        return response()->json($response,500);
    }
}
