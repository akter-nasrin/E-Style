<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FashionTip;
use Illuminate\Support\Facades\Auth;
class FashiontipsController extends Controller
{
    public function list()
    {
        $tips = FashionTip::all();
        return view('admin.pages.tips.list', compact('tips'));
    }
    public function form()
    {
        return view('admin.pages.tips.form');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image'=> $fileName,
        ]);

        FashionTip::create($request->all());

        return redirect()->route('fashion_tips.index')->with('success', 'Fashion tip added successfully!');
    }

    // Add edit, update, delete methods as needed
}
