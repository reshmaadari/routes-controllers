<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\employee;
class empctrl extends Controller
{
    //
    function listpara($id){
        return employee::find($id);
    }
    function list($id=null){
        return $id?employee::find($id):employee::all();
        }
    function add(Request $req){
        $data=new employee;
        $data->Name=$req->Name;
        $data->phone=$req->phone;
        $data->save();
        return ["data has been saved"];
    }
    function delete($id){
        DB::delete('delete from employees where id = ?',[$id]);
        echo "Record deleted successfully.";
    }
    function edit(Request $req){
        $emp=employee::find($req->id);
        $emp->Name=$req->Name;
        $emp->phone=$req->phone;
        $emp->save();
        // DB::update('update employees set Name = ?,phone=?',[$emp->Name,$emp->phone]);
        echo "Record updated successfully.";
    }
    function display($id){

    }
}
