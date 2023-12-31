<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
public function registration(){
    return view('frontend.pages.registration');
}
public function profile()
{
   // $orders=Order::where('user_id',auth()->user()->id)->get();
    return view('frontend.pages.profile');
}



public function doregistration(Request $request)
{
    // dd($request->all());

    User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'role'=>'user',
        'password'=>bcrypt($request->password),
    ]);

    notify()->success('Customer Registration successful.');
    return redirect()->route('home');
   
}

    public function login(){
        return view('frontend.pages.login');
    }
    public function doLogin(Request $request){

        $val=Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required',
        ]);
 
        if($val->fails())
        {
            notify()->error($val->getMessageBag());
            return redirect()->back();
        }

        $credentials=$request->except('_token');
        // dd($credentials);

        if(auth()->attempt($credentials))
        {
            notify()->success('Login Success.');
            return redirect()->route('home');
        }

        notify()->error('Invalid Credentials.');
            return redirect()->back();


    }
    
    public function logout()
    {
        auth()->logout();
        notify()->success('Logout Success.');    
        return redirect()->route('home');
    }
}
