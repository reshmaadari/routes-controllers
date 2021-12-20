<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\empctrl;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user(); 
Route::get('data',[userController::class,'getData']);
Route::get('listpara/{id}',[empctrl::class,'listpara']);
Route::get('list/{id?}',[empctrl::class,'list']);
Route::post('add',[empctrl::class,'add']);
Route::delete('delete/{id}',[empctrl::class,'delete']);
// Route::get('edit',[empctrl::class,'dispaly']);
Route::put('edit',[empctrl::class,'edit']);