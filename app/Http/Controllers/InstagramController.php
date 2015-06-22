<?php namespace App\Http\Controllers;

use App\Hashtag;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\InstagramAPI;

class InstagramController extends Controller {

	protected $post;

	public function __construct(InstagramAPI $post)
	{
		$this->post = $post;
	}

	public function index()
	{
		$instagrams = $this->post->getInstagram("apathysucks");

		$hashtags = Hashtag::all();

		return view('instagram.index', compact('instagrams', 'hashtags'));

	}

	public function show($hashtag)
	{

		$instagrams = $this->post->getInstagram($hashtag);

		return view('instagram.show', compact('instagrams'));
	}





}
