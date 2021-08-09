<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    function getAllInfo(){
        $rs = CustomerModel::getAll();
        return view('index',['result'=>$rs]);
    }
    function index(Request $request){
           $keyword = $request ->input('keyword','');          
            $rs= CustomerModel::getAll($keyword);  
        return view('index',['result'=>$rs]);
    }
    function insertInfo(Request $rq){
        $Name= $rq ->input('Name');
        $img= time().'.'.$rq->file('img')->extension();
        $path='storage/'.$img;
        $rq ->file('img')->storeAs('public',$img);

        $gender= $rq ->input('gender');
        $phone= $rq ->input('phone');
        $email = $rq ->input('email');
        $rs = CustomerModel::insertInfo($Name,$gender,$path,$phone,$email);
        if ($rs == true ) {
            return redirect('/customer');
        }
        else {
            return false;
        }
    }
}
