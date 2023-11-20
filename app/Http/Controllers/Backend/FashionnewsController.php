<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FashionnewsController extends Controller
{
public function list(){
    return view('adin.pages.fashionnews.list');
}
}
