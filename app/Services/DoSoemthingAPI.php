<?php namespace App\Services;

class DoSomethingAPI {

  public function getCampaign()
  {
    $client = new \Guzzle\Service\Client("https://www.dosomething.org/api/v1/campaigns.json");

    $response = $client->send();

    dd($response);


  }
}
