<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Outfit;
use Illuminate\Support\Facades\Validator;


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


public function update(Request $request,$id){
    dd($id);
    $outfit=Outfit::find($id);
    if($outfit)
    {
        $fileName=$outfit->image;
          if($request->hasFile('image'))
          {
              $file=$request->file('image');
              $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
             
              $file->storeAs('/uploads',$fileName);
    
      }
        $outfit->update([
            'name'=>$request->outfit_name,
            'color'=>$request->outfit_color,
            'material'=>$request->outfit_material,
            'description'=>$request->outfit_description,
            'price'=>$request->outfit_price,
            'image'=>$fileName,
         
        ]);
            notify()->success('Outfit Updated Successfully');
            return redirect()->back();

    }
}





         


            





    public function form(){
        return view('admin.pages.outfit.form');
    }
    public function store(Request $request){
        $validate=Validator::make($request->all(),[
            
            'outfit_name'=>'required',
            
            'outfit_price'=>'required|numeric|min:10',
        ]);

      if($validate->fails())
      {

        // notify()->error($validate->getMessageBag());
        // return redirect()->back();

        return redirect()->back()->withErrors($validate);
      }

      $fileName=null;
      if($request->hasFile('image'))
      {
          $file=$request->file('image');
          $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
         
          $file->storeAs('/uploads',$fileName);

      }

Outfit::create([
   
    'name'=>$request->outfit_name,
    'color'=>$request->outfit_color,
    'material'=>$request->outfit_material,
    'description'=>$request->outfit_description,
   
    'price'=>$request->outfit_price,

    'image'=>$fileName,

    
]);

return redirect()->back();

    }

}



