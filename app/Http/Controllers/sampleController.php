<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sampleController extends Controller
{
    //
    public function show(){
        return "<h1>hello i am from sample controller</h1>";
    }
    public function hide($id){
        return $id;
    }
   
}
