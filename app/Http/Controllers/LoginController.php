<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;

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


        $validation = Validator::make([
          'email' => request('email'),
          'password' => request('password')
        ], [
          'email' => 'required',
          'password' => 'required'
        ]);

        if($validation->passes()){
            if(Auth::attempt(['email' => $email, 'password' => $pass])){
                return redirect('/photos');
            } else {
                // passed validation but bad credentials
                return view('login', [
                    'hints' => [
                        'Bad Login. Try Again.', 
                        'Email: Admin@gmail.com',
                        'Password: secret'
                        ]
                ]);
            }
        } else {
            // did not pass validation
            return redirect('/login')
                ->withErrors($validation);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
