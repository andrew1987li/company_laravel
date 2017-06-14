<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AjaxAuthController extends Controller
{
    //
    public function authenticate(Request $request)
    {

    	$this->validate($request, [
    			'email'=>'required|max:255|email',
    			'password'=>'required'
    		]);

    	$email=$request->input('email');
    	$password=$request->input('password');
    	$remember=$request->input('remember');

    	if(Auth::attempt(['email'=>$email, 'password'=> $password],$remember)){
    		return response()->json(array('success'=>'true'),200);
    	}
    	else
    		return response()->json(array('success'=>'false'),200);
    	
    }

    public function customLogin(Request $request)
    {

    	$this->validate($request, [
    			'email'=>'required|max:255|email',
    			'password'=>'required'
    		]);

    	$email=$request->input('email');
    	$password=$request->input('password');
    	$remember=$request->input('remember');

    	if(Auth::check()){
    		return redirect('/');
    	}

    	if(Auth::attempt(['email'=>$email, 'password'=> $password],$remember)){
    		//return redirect()->action('');
    		return redirect('/');
    	}
    	else
    		return redirect('/login');
    	
    }
}
