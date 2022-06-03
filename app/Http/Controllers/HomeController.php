<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home.index');
    }

    public function test(){
        return view('home.test');
    }

    public function param($id, $number){
        //echo "Parameter 1:", $id;
        //echo "<br>Parameter 2:", $number;
        //echo "<br>Multiplication of parameters:", $id * $number;
        return view('home.test2',[
            'id' => $id,
            'number' => $number
        ]);
    }
    public function save(Request $request){
        echo "Save function ";
        echo "Name :",$_REQUEST["fname"];
        echo "Name :",$_REQUEST["lname"];

    }



}
