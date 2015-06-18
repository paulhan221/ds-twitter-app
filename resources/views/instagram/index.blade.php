@extends('app')

@section('content')
  <h1 class="title"><img width="100" height="100" src="{{ asset('/images/dosomething.png')}}">
  <a href="https://www.dosomething.org">Dosomething.org</a> Campaigns Hastags</h1>
  <!-- <link href="{{ asset('/css/instagram.css') }}" rel="stylesheet"> -->

  <input type="checkbox" id="tog" checked>
  <label for="tog" id="ham">
    <span></span>
    <span></span>
    <span></span>
  </label>

  <nav>
    <h2 style = "padding-left: 80px">Hashtags</h2>
    <a href="/instagrams/dosomethingorg">#DoSomethingOrg</a>
    <a href="/instagrams/apathysucks">#ApathySucks</a>
    <a href="/instagrams/1in3ofus">#1in3ofus</a>
    <a href="/instagrams/miccheckracism">#MicCheckRacism</a>
    <a href="/instagrams/suspended4what">#Suspended4What</a>
    <a href="/instagrams/thumbwars">#ThumbWars</a>
    <a href="/instagrams/comebackclothes">#ComeBackClothes</a>
    <a href="/instagrams/teensforjeans">#TeensForJeans</a>
    <a href="/instagrams/notbreakingnews">#NotBreakingNews</a>
    <a href="/instagrams/weareable">#WeAreAble</a>
  </nav>
@stop
