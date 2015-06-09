<?php namespace App\Http\Controllers;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Services\TwitterAPI;

class TweetsController extends Controller {

	protected $twitter;

	public function __construct(TwitterAPI $twitter) 
	{
		$this->twitter = $twitter;
	}

	public function index()
	{
		$tweets = $this->twitter->update();

		$client = new \Guzzle\Service\Client('http://lobby.dosomething.org/');

    $res = $client->post('services/social', [
    	'headers' => [
    		'Content-Type' => 'application/json',
    	],
    	'body' => json_encode($tweets)
    ]);

    // dd($res->getBody());

		return view('tweets.index', compact('tweets'));
	}

}
