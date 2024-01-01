<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designer;
use Illuminate\Support\Facades\Auth;

class DesignerController extends Controller
{
    public function create()
    {
        return view('designers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            // Add other designer-specific fields as needed
        ]);

        $designer = Auth::user()->designer()->create($request->all());

        return redirect()->route('designers.show', $designer)->with('success', 'Designer registered successfully!');
    }

    public function show(Designer $designer)
    {
        return view('designers.show', compact('designer'));
    }

    // Add edit, update, delete methods as needed
}
