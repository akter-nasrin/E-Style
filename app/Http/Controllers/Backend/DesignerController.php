<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designer;
use Illuminate\Support\Facades\Auth;

class DesignerController extends Controller
{
    public function list()
    {
        $designers = Designer::all();
        return view('admin.pages.designer.list', compact('designers'));
    }
    public function create()
    {
        return view('admin.pages.designer.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email'=>'required',
            'password'=>'required',
            'country'=>'required',
            'address'=>'required',
            'education'=>'required',
            'experience'=>'required',
            // 'job title'=>$request->'job title',
        
        
            // Add other designer-specific fields as needed
        ]);

        $designer = Auth::user()->designer()->create($request->all());

        return redirect()->route('designers.show', $designer)->with('success', 'Designer registered successfully!');
    }

    public function show(designers $designer)
    {
        return view('designers.show', compact('designer'));
    }

    // Add edit, update, delete methods as needed
}
