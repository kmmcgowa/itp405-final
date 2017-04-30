<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
		public function index(){
			if(Auth::check()){
				return redirect('/photos');
			}
			return view('login');
		}

    public function handle(Request $request){
    	$email = request('email');
    	$pass = request('password');
    	if(Auth::attempt(['email' => $email, 'password' => $pass])){
    		return redirect('/photos');
    	} else {
    		return view('login')->withInput();
    	}
    }
}
