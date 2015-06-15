<?php namespace App\Services;

class InstagramAPI {

  public function getInstagram($hashtag)
  {
    $client = new \Guzzle\Service\Client('https://api.instagram.com');

    $auth = new \Guzzle\PLugin\Oauth\OauthPLugin([
        'client_id'        => getenv('INSTAGRAM_CLIENT_ID'),
        'client_secret'     => getenv('INSTAGRAM_CLIENT_SECRET'),
    ]);

  $client->addSubscriber($auth);

  $response = $client->get('/v1/tags/' . $hashtag . '/media/recent?access_token=34542473.1fb234f.4cb854fc695848e19e40034203ef1abf')->send();
  return $response;
  }
}
