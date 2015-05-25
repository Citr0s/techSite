<?php namespace App\Http\Controllers;

use Auth;
use Request;

class LoginCOntroller extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('login');
	}
	public function logout()
	{
		Auth::logout();

		return redirect('/');
	}
	public function auth()
	{
		$input = Request::all();

		if (Auth::attempt(['email' => $input['email'], 'password' => $input['password']]))
        {
            return redirect('/');
        }else{
        	$errors = 'Data mismatch.';
        	return view('login')->with('errors', $errors);
        }
	}
}
