<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
	/*
	public function __construct()
	{
		$this->middleware('guess', ['except' => 'destroy']);
	}
	*/
    public function index()
    {
        if(Auth::user()){
            return redirect('/user/dashboard');
        }else{   
            return view('user_component.login');
        }
    }    

    public function doLogin()
    {
    	if(! auth()->attempt(request(['username','password'])))
    	{
    		return back();
    	}
    	return redirect('/user/dashboard');
    }

    public function dashboard()
    {
        if(Auth::user()){
            return view('user_component.dashboard');
        }else{
            return redirect()->home();
        }
    }

    public function destroy()
    {
    	auth()->logout();
    	return redirect()->home();
    }

}
