<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index(){
		$articles = Article::all();

		return view('index')->with('articles', $articles);

	}
	public function show($id){
		$article = Article::findOrFail($id);

		return view('show')->with('article', $article);
	}
}
