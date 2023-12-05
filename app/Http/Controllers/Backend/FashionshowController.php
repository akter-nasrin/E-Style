<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\fashionshow;

class FashionshowController extends Controller
{
   public function list(){
    {
        $fashionShows = FashionShow::all();
        return view('admin.pages.fashionshow.show');
    
    }

    //public function show($id)
    //{
        //$fashionShow = FashionShow::findOrFail($id);
       // $approvedDesigns = $fashionShow->designs()->where('status', 'approved')->get();
       // return view('fashion-shows.show', compact('fashionShow', 'approvedDesigns'));
    //}

   }
}
