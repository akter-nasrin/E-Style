<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outfit;

class OutfitController extends Controller
{
    public function list(){
        $outfits=Outfit::all();
        return view('admin.pages.outfit.list',compact('outfits'));
    }
    public function form(){
        return view('admin.pages.outfit.form');
    }
    public function store(Request $request){
//dd($request->all());


Outfit::create([
   
    'name'=>$request->outfit_name,
    'color'=>$request->outfit_color,
    'material'=>$request->outfit_material,
    'price'=>$request->outfit_price,
    'description'=>$request->outfit_description,

    
]);

return redirect()->back();

    }

}
