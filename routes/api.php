<?php

use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\F_s_a_formController;
use App\Http\Controllers\Api\Form_30Controller;
use App\Http\Controllers\Api\Form_31Controller;
use App\Http\Controllers\Api\Form_33Controller;
use App\Http\Controllers\Api\PdfController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use thiagoalessio\TesseractOCR\TesseractOCR;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('pdf', function () {
    return view('pdf_test');
});
Route::get('pdf_34',[PdfController::class,'pdf_34']);
Route::get('pdf_33',[PdfController::class,'pdf_33']);
Route::get('pdf_31',[PdfController::class,'pdf_31']);
Route::get('pdf_30',[PdfController::class,'pdf_30']);


Route::post('test_pdf',[UserController::class,'test_pdf']);

Route::post('check_login',[UserController::class,'check_login']);


Route::get('test1', function () {
    return response(Auth::user()->authority,200) ;
})->middleware('auth.basic');
Route::get('test2', function () {
    return response(Auth::user(),200) ;
})->middleware('auth.basic');



Route::get('departments/getDepartment_with_users',[DepartmentController::class,'getDepartment_with_users']);

Route::get('departments/getAllDepartment_with_fsa',[DepartmentController::class,'getAllDepartment_with_fsa']);
Route::get('departments/getDepartment_with_fsa',[DepartmentController::class,'getDepartment_with_fsa']);
Route::apiResource('departments',DepartmentController::class);
Route::apiResource('users',UserController::class);




Route::get('fsa/Auth_forms', [F_s_a_formController::class,'Auth_forms']);
Route::apiResource('f_s_a_form',F_s_a_formController::class);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/form_33/test', [Form_33Controller::class,'test']);
Route::apiResource('form_33',Form_33Controller::class);
Route::apiResource('form_31',Form_31Controller::class);
Route::apiResource('form_30',Form_30Controller::class);








