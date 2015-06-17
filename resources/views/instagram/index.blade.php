@extends('app')

@section('content')
  <img width="100" height="100" src="{{ asset('/images/dosomething.png')}}">
  <h1><a href="https://www.dosomething.org">Dosomething.org</a> Campaigns Hastags</h1>
  <!-- <link href="{{ asset('/css/instagram.css') }}" rel="stylesheet"> -->

  
  <ul>
    <li><a href="/instagrams/dosomethingorg">#DoSomethingOrg</a></li> 
    <li><a href="/instagrams/apathysucks">#ApathySucks</a></li> 
    <li><a href="/instagrams/1in3ofus">#1in3ofus</a></li> 
    <li><a href="/instagrams/miccheckracism">#MicCheckRacism</a></li> 
    <li><a href="/instagrams/suspended4what">#Suspended4What</a></li> 
    <li><a href="/instagrams/thumbwars">#ThumbWars</a></li> 
    <li><a href="/instagrams/comebackclothes">#ComeBackClothes</a></li> 
    <li><a href="/instagrams/teensforjeans">#TeensForJeans</a></li> 
    <li><a href="/instagrams/notbreakingnews">#NotBreakingNews</a></li> 
    <li><a href="/instagrams/weareable">#WeAreAble</a></li> 
  </ul>

@stop
