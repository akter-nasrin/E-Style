<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Outfit;

class OutfitController extends Controller
{
    public function list(){
        $outfits=Outfit::paginate(4);
        return view('admin.pages.outfit.list',compact('outfits'));
    }
    public function delete($id)
    {
      $outfit=Outfit::find($id);
      if($outfit)
      {
        $outfit->delete();
      }

      notify()->success('Product Deleted Successfully.');
      return redirect()->back();
    }

public function edit($id){
    $outfit=Outfit::find($id);
    return view('admin.pages.outfit.edit',compact('outfit'));
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



