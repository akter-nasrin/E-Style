<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FashionBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FashionBlogController extends Controller
{
    public function list()
    {
        $blogs = FashionBlog::all();
        return view('admin.pages.blog.list', compact('blogs'));
    }
    public function form()
    {
        return view('admin.pages.blog.form');
    }


    public function store(Request $request)
    {
        $request->validate([
            'caption' => 'required',
            'content'=>'required',
            'image'=>'required',
            
            // Add other designer-specific fields as needed
        ]);

        $blog= Auth::user()->designer()->create($request->all());

        return redirect()->route('designers.blog', $blog)->with('success', 'blog uploaded successfully!');
    }

   

}
