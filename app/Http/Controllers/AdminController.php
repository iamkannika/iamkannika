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

    public function edit(Request $request) 
    {
        $id = $request->input('id');

        // $coffee = Coffees::find($id);
        $coffee = Coffees::where('id', $id)->first();

        // return $coffee;
        return view('edit', [
            'coffee' => $coffee
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $price = $request->input('price');
        $type = $request->input('type');

        Coffees::where('id', $id)->update([
            'name' => $name,
            'price' => $price,
            'type' => $type,
        ]);

        return redirect()->route('admin-create');
        //Coffees::
    }
    
}