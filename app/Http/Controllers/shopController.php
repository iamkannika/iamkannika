<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Coffees;
use App\confirm_coffee;
use Illuminate\Http\Request;
    
class shopController extends Controller
{

    public function menuPage() 
    {
        $coffees = Coffees::all();
        $array = [
            'no' => 1234,
            'name' => 'Mook coffee & cafe',
            'coffees' => $coffees
        ];
    //    return $array;
        return view('menu', $array);
    }

    public function functionName02() 
    {
        return 'test in controller 02';
    }

    public function orderPage(Request $request) 
    {
        $id = $request->input('id');
       $coffee = Coffees::where('id', $id)->first();

        //return $coffee;
        return view('order', [
            'coffee' => $coffee
        ]);
       
    }
    public function functionName04(Request $request) 
    {
        $name = $request->input('name');
        confirm_coffee::create([
            'name' => $name,
            'price'=> 100,
            'Date'=> '2018-12-16',
        ]);
        //return $name;
        $coffees = confirm_coffee::all();
        //return $coffees;
        //return $array;
        return view('confirm', [
            'confirm_coffee' => $coffees
        ]);
    }

    public function functionName05() 
    {
        $coffees = Coffees::all();
        $array = [
            'no' => 1234,
            'name' => 'Mook cafe',
            'coffees' => $coffees
        ];
    //    return $array;
        return view('welcome', $array);
    }
}