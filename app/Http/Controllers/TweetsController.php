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

		$client = new \Guzzle\Service\Client('http://lobby.dosomething.org/services/social');

    // $res = $client->post('services/social', [
    // 	'headers' => [
    // 		'Content-Type' => 'application/json',
    // 	],
    // 	'body' => json_encode($tweets)
    // ]);

    $request = $client->post('http://lobby.dosomething.org/services/social',array(
     'content-type' => 'application/json'
			       ),array());
			$request->setBody(json_encode($tweets)); #set body!
			$response = $request->send();

			dd($response);
			return $response;

		return view('tweets.index', compact('tweets'));
	}

}
