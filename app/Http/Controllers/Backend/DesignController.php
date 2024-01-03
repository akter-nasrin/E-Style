<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
 use App\Models\Design;
 use App\Models\User;
 use Illuminate\Http\Request;

 class DesignController extends Controller
{


public function list()
{
    
     $designs = Design::with(['design','user'])->paginate(5); // You might want to paginate or filter designs ->paginate(5);

   return view('pages.design.list', compact('designs'));
}

     public function form()
    {
        return view('pages.design.form');
    }

    public function submitdesign(Request $request)
    {
        $request->validate([
             'image' => 'required',
           'description' => 'required',
       ]);

        $user = auth()->user();

        $fileName=null;
     if($request->hasFile('image'))
     {
           $file=$request->file('image');
          $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
         
         $file->storeAs('/uploads',$fileName);

      }
       Product::create([
                'user_id'=>$request->user_id,
                
                'name'=>$request->design_name,
            
                'description'=>$request->design_description,
        
                 'image'=>$fileName
      ]);

       return redirect()->route('design.form')->with('success', 'Design submitted successfully!');
   }
 }

