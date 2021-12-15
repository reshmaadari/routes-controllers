<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sampleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("sample",[sampleController::class,'show'] );

Route::get("sample3/{id}",[sampleController::class,'hide']);

Route::get("sample2/{sample4?}",function($sample4="Reshma"){
    return view('sample2',['sample4'=>$sample4]);
});

Route::get('/', function () {
    return view('hello');
});
