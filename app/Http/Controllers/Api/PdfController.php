<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Form_30StoreRequest;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    public function __construct(Request $request) {
        $request->test=now()->format('d/m/Y');
    }

    public function pdf_30(Request $request)
    {       
        $pdf = App::make('dompdf.wrapper');  
        $file_name='form_30'.uniqid().random_int(0,99999999).'.pdf';     
        $pdf->loadHTML(view('pdf_template30',compact('request')))->setPaper('a4')->setWarnings(false)->save($file_name);        
        return url('/'.$file_name);
    }

    public function pdf_31(Request $request)
    {
        // $key=2;
        $pdf = App::make('dompdf.wrapper');  
        $file_name='form_31'.uniqid().random_int(0,99999999).'.pdf';      

        $pdf->loadHTML(view('pdf_template31',compact('request')))->setPaper('a4')->setWarnings(false)->save($file_name);
        
        return url('/'.$file_name);
    }
    public function pdf_33(Request $request)
    {
        $pdf = App::make('dompdf.wrapper');  
        $file_name='form_33'.uniqid().random_int(0,99999999).'.pdf';      

        $pdf->loadHTML(view('pdf_template33',compact('request')))->setPaper('a4')->setWarnings(false)->save($file_name);
        
        return url('/'.$file_name);
    }
    public function pdf_34(Request $request)
    {
        $pdf = App::make('dompdf.wrapper');  
        $file_name='form_34'.uniqid().random_int(0,99999999).'.pdf';      

        $pdf->loadHTML(view('pdf_template34',compact('request')))->setPaper('a4')->setWarnings(false)->save($file_name);
        
        return url('/'.$file_name);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
