<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App\Models\Outfit;
use Illuminate\Http\Request;


class FrontendHomeController extends Controller
{
    public function home()
    {

        $products=Outfit::all();
        // dd($products);
        return view('frontend.pages.home',compact('outfits'));
    }
    
}
