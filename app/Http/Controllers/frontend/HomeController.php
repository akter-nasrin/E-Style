<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Outfit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function home(){
    
    $outfits=Outfit::all();
    return view('frontend.pages.home',compact('outfits'));
 }
}
