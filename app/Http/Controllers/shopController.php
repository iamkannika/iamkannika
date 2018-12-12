<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Coffees;
    
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

    public function orderPage() 
    {
        $coffees = Coffees::all();
        $array = [
            'no' => 1234,
            'name' => 'Mook cafe',
            'coffees' => $coffees
        ];
    //   return $array;
        return view('order', $array);
       // return $coffees;
    }
    public function functionName04() 
    {
        $coffees = Coffees::all();
        $array = [
            'no' => 1234,
            'name' => 'Mook cafe',
            'coffees' => $coffees
        ];
    //    return $array;
        return view('confirm', $array);
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