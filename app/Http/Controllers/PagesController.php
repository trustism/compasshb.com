<?php namespace CompassHB\Www\Http\Controllers;

use CompassHB\Www\Http\Requests;
use CompassHB\Www\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function __construct()
	{

		$params = array(
    		'database'  => getenv('DB_NAME'),
    		'username'  => getenv('DB_USER'),
    		'password'  => getenv('DB_PASSWORD'),
    		'prefix'    => 'wp_');
		
		\Corcel\Database::connect($params);

	}

	public function content($year, $date, $slug)
	{
		// All published posts
		$posts = \Post::slug($slug)->get();

		return view('college')->with('posts', $posts);
	}

    public function read()
    {
    	$post = \Post::published()->take(1)->get();

    	$esv = new \CompassHB\Www\Esv\Esv;

    	$content = $esv->retrieveScripture($post[0]->post_title);

        return view('pages.read')->with('post', $post)->with('content', $content);
    }

    public function pray()
    {
        return view('pages.pray');
    }

    public function fellowship()
    {
        return view('pages.fellowship');
    }

    public function learn()
    {
        return view('pages.learn');
    }

	public function youth()
	{
		return view('pages.youth');
	}

	public function whoweare()
	{
		return view('pages.whoweare');
	}

	public function eightdistinctives()
	{
		return view('pages.eightdistinctives');
	}

	public function give()
	{
		return view('pages.give');
	}

	public function icecreamevangelism()
	{
		return view('pages.icecreamevangelism');
	}

	public function kidsministry()
	{
		return view('pages.kidsministry');
	}

	public function whatwebelieve()
	{
		return view('pages.whatwebelieve');
	}

	public function calendar()
	{
		return view('pages.calendar');
	}

	public function college()
	{
		return view('pages.college');
	}

	public function home()
	{
		$sermons = \Post::published()->take(3)->get();

		return view('app')->with('sermons', $sermons);

	}

}
