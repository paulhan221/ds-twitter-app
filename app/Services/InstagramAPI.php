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
        $array["time_interval"] = $this->timerFormat($instagram["created_time"], time());
      array_push($final_instagrams, $array);
    }
    return $final_instagrams;
  }

  public function timerFormat($start_time, $end_time, $std_format = false) {
   $total_time = $end_time - $start_time;
   $days       = floor($total_time /86400);
   $results = "";
   if($std_format == false)
   {
     if($days > 0) $results .= $days . (($days > 1)?" days ":" day ");
   }
   else
   {
     if($days > 0) $results = $days . (($days > 1)?" days ":" day ");
     $results = sprintf("%s%02d:%02d:%02d",$results);
   }
   return $results;
 }
}
