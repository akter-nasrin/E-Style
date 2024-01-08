<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FashionShowController extends Controller
{
    public function show(){
        {
            $fashionShows = FashionShow::all();
            return view('admin.pages.fashionshow.show',compact('fashionshow'));
        
        }
    
    
        
        //public function show($id)
        //{
            //$fashionShow = FashionShow::findOrFail($id);
           // $approvedDesigns = $fashionShow->designs()->where('status', 'approved')->get();
           // return view('fashion-shows.show', compact('fashionShow', 'approvedDesigns'));
        //}
    
       }
       
}
