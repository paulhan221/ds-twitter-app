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
			'token'        				=> getenv('TWITTER_ACCESS_TOKEN'),
			'token_secret' 				=> getenv('TWITTER_ACCESS_TOKEN_SECRET')
  	]);

  	$client->addSubscriber($auth);

    $response = $client->get('search/tweets.json?q=@dosomething&result_type=popular')->send();

    $tweets = $response->json()['statuses'];

    $twts = [];
    $final_tweets = [];

    foreach ($tweets as $tweet) {
    	$twts['name'] = $tweet["user"]["name"];
    	$twts['screen_name'] = $tweet["user"]["screen_name"];
    	$twts['profile_pic'] = $tweet["user"]["profile_image_url"];
    	$twts['location'] = $tweet["user"]["location"];
    	$twts['text'] = $tweet["text"];
    	$twts['tweet_time'] = preg_replace('/\+\S+/', '', $tweet["created_at"]);
    	array_push($final_tweets, $twts);
    }
  	
		return view('tweets.index', compact('tweets'));
	}

}
