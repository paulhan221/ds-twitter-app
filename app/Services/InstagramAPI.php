<?php namespace App\Services;

class InstagramAPI {

  public function getInstagram($hashtag)
  {
    $client = new \Guzzle\Service\Client('https://api.instagram.com');

  $final_instagrams = [];
  $response = $client->get('/v1/tags/' . $hashtag . '/media/recent?access_token=' . getenv('INSTAGRAM_ACCESS_TOKEN'))->send();

  // dd($response->json()["data"]);

  $instagrams = $response->json()["data"];
  foreach($instagrams as $instagram) {
    $array = [];
    if(isset($instagram["videos"])){
      $array["videos"] = $instagram["videos"]["standard_resolution"]["url"];
    }else{
      $array["picture"] = $instagram["images"]["standard_resolution"]["url"];
    }
      $array["username"] = $instagram["user"]["username"];
      $array["profile_picture"] = $instagram["user"]["profile_picture"];
      $array["likes_count"] = $instagram["likes"]["count"];
    array_push($final_instagrams, $array);
  }
  return $final_instagrams;
  }
}
