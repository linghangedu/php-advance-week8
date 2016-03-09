<?php namespace App\Http\Controllers;

use App\Page;
use App\Article;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        //add $pages into view Html : $pages = Page::all()
        return view('home')->withArticles(Article::where('id', '>', 0)->orderBy('updated_at', 'desc')->take(5)->get());
	}

}
