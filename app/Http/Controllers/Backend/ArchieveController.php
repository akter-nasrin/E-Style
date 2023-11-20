<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Archieve;

class ArchieveController extends Controller
{
    public function list(){
        $archieves=Archieve::all();
        
        return view ('admin.pages.archieve.list',compact('archieves'));
    }
    
    public function form(){
        return view ('admin.pages.archieve.form');
    }
    
    public function store(Request $request){
        //dd($request->all());
        
        
        Archieve::create([
           
            'name'=>$request->archieve_name,
            'region'=>$request->region,
            'history'=>$request->history,
            
        
        
            
        ]);
        
        return redirect()->back();
        
         }
}
