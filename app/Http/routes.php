<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'WelcomeController@index');

Route::get('/', function()
{
    $client = new \Guzzle\Service\Client('https://api.twitter.com/1.1');

    $auth = new \Guzzle\PLugin\Oauth\OauthPLugin([
			'consumer_key'        => getenv('TWITTER_CONSUMER_KEY'),
			'consumer_secret'     => getenv('TWITTER_CONSUMER_SECRET'),
			'token'        => getenv('TWITTER_ACCESS_TOKEN'),
			'token_secret' => getenv('TWITTER_ACCESS_TOKEN_SECRET')
  	]);

  	$client->addSubscriber($auth);

    $response = $client->get('search/tweets.json?q=@dosomething')->send();

    dd($response->json());
});

// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);