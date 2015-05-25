<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;

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
		$articles = Article::latest('published_at')->published()->get();

		return view('index')->with('articles', $articles);
	}

	public function show($id){
		$article = Article::findOrFail($id);

		return view('show')->with('article', $article);
	}

	public function create(){
		return view('create');
	}

	public function store(Requests\CreateArticleRequest $request){
		$input = Request::all();

		$input['author_id'] = 1; //to be changed to currently logged in moderator
		$input['thumbnail'] = 'pic1.jpg'; //to be changed to the uploaded file

		Article::create($input);

		return redirect('/');
	}
}
