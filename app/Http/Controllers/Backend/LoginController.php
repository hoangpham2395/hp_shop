<?php 

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BackendController;
use Illuminate\Http\Request;
use Validator;
use Auth;

class LoginController extends BackendController 
{
	public function getLogin() 
	{
		return view('backend.login.index');
	}

	public function postLogin(Request $request) 
	{
		$rules = [
			'email' => ['required', 'email'],
			'password' => ['required']
		];

		$data = $data = [
    		'email' => $request->input('email'),
    		'password' => $request->input('password')
    	];

		// Check validate
		$validator = Validator::make($data, $rules);
		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
		}

		$rememberMe = ($request->input('remember_me')) ? true : false;
		//dd(Auth::guard('admin')->attempt($data, $rememberMe));
    	if (Auth::attempt($data, $rememberMe)) {
    		return redirect()->route('dashboard');
    	} 
    	// Login Fail
        $errors = new MessageBag(['errorLogin' => 'Email or password is incorrect.']);
    	return redirect()->back()->withErrors($errors)->withInput();
	}

	public function logout() 
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}