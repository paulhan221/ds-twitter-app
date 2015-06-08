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

Route::get('/users/{username}', function($username)
{
    $client = new \Guzzle\Service\Client('https://api.github.com/');

    $auth = new \Guzzle\PLugin\Oauth\OauthPLugin([
    			'CONSUMER_KEY'        => getenv('TWITTER_CONSUMER_KEY'),
	'CONSUMER_SECRET'     => getenv('TWITTER_CONSUMER_SECRET'),
	'ACCESS_TOKEN'        => getenv('TWITTER_ACCESS_TOKEN'),
	'ACCESS_TOKEN_SECRET' => getenv('TWITTER_ACCESS_TOKEN_SECRET'),
    	]);

    $response = $client->get("users/$username")->send();

    dd($response->json());
});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
