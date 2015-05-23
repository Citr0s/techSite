<?php namespace App\Http\Controllers;

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
		$siteName = 'techSite';
		return view('login')->with('siteName', $siteName);
	}

}
