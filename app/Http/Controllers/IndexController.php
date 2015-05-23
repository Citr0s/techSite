<?php namespace App\Http\Controllers;

class IndexController extends Controller {

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
		return view('index')->with('siteName', $siteName);
	}

}
