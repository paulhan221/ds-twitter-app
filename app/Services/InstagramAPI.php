<?php namespace App\Services;

class InstagramAPI {

  public function getInstagram($hashtag)
  {
    $client = new \Guzzle\Service\Client('https://api.instagram.com');

    $final_instagrams = [];

    $response = $client->get('/v1/tags/' . $hashtag . '/media/recent?access_token=' . getenv('INSTAGRAM_ACCESS_TOKEN'))->send();

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
        $array["caption"] = $instagram["caption"]["text"];
        $array["post_link"] = $instagram["link"];
        $array["created_time"] = $instagram["created_time"];

        // dd(date('m/d/Y', $instagram["created_time"]);
        // $this->getDatePosted($instagram["created_time"]);
      array_push($final_instagrams, $array);
    }
    return $final_instagrams;
  }

  public function getDatePosted($date){
    $timeNow = time();
    $numDays = abs($date - $timeNow)/60/60/24;
    dd($numDays);
  }
}
