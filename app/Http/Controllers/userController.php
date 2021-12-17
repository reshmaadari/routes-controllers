<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class userController extends Controller
{
    function save(Request $req){
    $data= new student;
    $data->name=$req->name;
    $data->email=$req->email;
    $data->gender=$req->gender;
    $data->phone=$req->phone;
    $data->description=$req->description;
    $data->language=$req->language;
    $data->country=$req->country;
    $data->state=$req->state;
    $data->city=$req->city;
    $data->save();
    return redirect('main');
    }
    // function fetch($id){
    //     return view("hello",["about"->$id]);

    // }
    function show(){
        $info=student::all();
        return view('main',['members'=>$info]);
    }
}
