<?php

namespace App\Http\Controllers;
use DB;
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
    public function del($id) {
        DB::delete('delete from students where id = ?',[$id]);
        echo "Record deleted successfully.";
        echo 'Click Here to go back.';
        }
    function show(){
        $info=student::all();
        return view('main',['members'=>$info]);
    }
    function addme(){
        return view('userview');
    }
    function edit($id){
        $store=student::find($id);
        return view('updateView',['udata'=>$store]);
        // echo $store->name;
    }
    function nono(Request $req,$id){
        $name=$req->name;
        $email=$req->email;
        $gender=$req->gender;
        $phone=$req->phone;
        $description=$req->description;
        $language=$req->language;
        $country=$req->country;
        $state=$req->state;
        $city=$req->city;
        DB::update('update students set name = ?,email=?,gender=?,phone=?,description=?,language=?,country=?,state=?,city=? where id = ?',[$name,$email,$gender,$phone,$description,$language,$country,$state,$city,$id]);
                echo "Record updated successfully.";
        }
    function getData(){
        return ["name"=>"Reshma","redgno"=>502];
    }
    function listpara($id){
        return student::find($id);
    }
    function list($id=null){
        return $id?student::find($id):student::all();
        }
        // function add(Request $req){
        //     $data=new student;
        //     $data->name=$req->name;
        //     $data->email=$req->email;
        //     $data->gender=$req->gender;
        //     $data->phone=$req->phone;
        //     $data->description=$req->description;
        //     $data->language=$req->language;
        //     $data->country=$req->country;
        //     $data->state=$req->state;
        //     $data->city=$req->city;
        //     $data->save();
        //     return ["data has been saved"];
        // }
}