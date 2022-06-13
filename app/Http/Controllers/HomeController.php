<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){
        $sliderdata=Product::limit(10)->get();
        $productlist1=Product::limit(10)->get();
        return view('home.index',[
            'sliderdata' => $sliderdata,
            'productlist1' => $productlist1
        ]);
    }

    public function product($id){
        $data = Product::find($id);
        $images = DB::table('images') -> where ('product_id', $id) -> get();
        return view('home.product',[
            'data' => $data,
            'images' => $images
        ]);
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
