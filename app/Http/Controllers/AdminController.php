<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Coffees;
use Illuminate\Http\Request;
    
class AdminController extends Controller
{

    public function create() 
    {
        $coffees = Coffees::all();
        $array = [
            'no' => 1234,
            'name' => 'Mook coffee & cafe',
            'coffees' => $coffees
        ];
    //    return $array;
        return view('admin', $array);
    }

    public function save(Request $request) 
    {
        Coffees::create([
            'name' => $request->name,
            'price' => $request->price +10,
            'type' => $request->type
        ]);

        return back();
        // return $request->all();
    }
    public function delete(Request $request) 
    {
        // return 'delete';
        $id = $request->id;
        // return $id;
        Coffees::where('id', $id)->delete();

        return back();
        // return $request->all();
    }

    public function edit() 
    {
        $coffees = Coffees::all();
        $array = [
            'no' => 1234,
            'name' => 'Mook coffee & cafe',
            'coffees' => $coffees
        ];
        
        //    return $array;
        return view('admin', $array);
    }
    
}