<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Coffees;

class HelloController extends Controller
{

    public function functionName() 
    {
        $coffees = Coffees::all();
        return $coffees;
    }

    public function functionName02() 
    {
        return 'test in controller 02';
    }
    
}