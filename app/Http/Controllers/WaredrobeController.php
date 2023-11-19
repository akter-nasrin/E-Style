<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\\Waredrobe;

class WaredrobeController extends Controller
{
    public function list(){
        return view('admin.pages.waredrobe.list');
    }
    public function form(){
        return view('admin.pages.waredrobe.form');
    }
    public function store(Request $request){
        dd($request->all());
        
        
        Waredrobe::create([
           
            'name'=>$request->outfit_name,
            'details'=>$request->outfit_details,
            'designer'=>$request->outfit_designer,
            
            'image'=>$request->outfit_image,

        
            
        ]);
        
        return redirect()->back();
        
            }
        
}
