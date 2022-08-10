<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct(){}
	
	public function signIn(){
//		var_dump(1);
//		exit;
		return view('/dashboard/auth/sign_in');
	}
	public function signInPost(Request $request){
//		$user = new User();
//		$user->password = Hash::make('nf4kVEjB');
//		$user->email = 'admin@example.com';
//		$user->name = 'admin';
//		$user->save();
		
		$credentials = [
			'email' => $request->input('email'),
			'password' => $request->input('password'),
		];
		if ($credentials['password'] === 'admin' && $credentials['email'] === 'admin@example.com') {
			$request->session()->regenerate();
			Auth::attempt($credentials);
//			var_dump($request->all());
//			var_dump(Auth::check());
//			exit;
//			return redirect(route('dashboard-home'));
//			Auth::loginUsingId(1);
			return redirect()->intended(route('dashboard-home'));
		}
//		var_dump($request->all());
//		var_dump($credentials);
//		var_dump(Auth::attempt($credentials));
//		var_dump(Auth::check());
//		var_dump();
//		return redirect()->intended(route('dashboard-home'));
//		exit;
		
		return redirect(route('dashboard-auth-signin'));
	}
}
