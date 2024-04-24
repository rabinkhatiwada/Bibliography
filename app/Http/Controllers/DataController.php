<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    function add(Request $request,$num1,$num2){
        // dd($request->all());
        // return 'add'.($num1+$num2);

        return view('data.add',['num1'=>$num1,"num2"=>$num2]);
    }
}
