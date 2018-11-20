<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Coffees;

class HelloController extends Controller
{

    public function functionName() 
    {
        $coffees = Coffees::all();
        $array = [
            'no' => 1234,
            'name' => 'Mook cafe',
            'coffees' => $coffees
        ];
       // return $array;
        return view('welcome', $array);
    }

    public function functionName02() 
    {
        return 'test in controller 02';
    }
    
}