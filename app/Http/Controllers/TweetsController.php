<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TweetsController extends Controller {

	public function index()
	{
    $client = new \Guzzle\Service\Client('https://api.twitter.com/1.1');

    $auth = new \Guzzle\PLugin\Oauth\OauthPLugin([
			'consumer_key'        => getenv('TWITTER_CONSUMER_KEY'),
			'consumer_secret'     => getenv('TWITTER_CONSUMER_SECRET'),
			'token'        => getenv('TWITTER_ACCESS_TOKEN'),
			'token_secret' => getenv('TWITTER_ACCESS_TOKEN_SECRET')
  	]);

  	$client->addSubscriber($auth);

    $response = $client->get('search/tweets.json?q=@dosomething&result_type=popular')->send();

    $tweets = $response->json()['statuses'];

		return view('tweets.index', compact('tweets'));
	}

}
