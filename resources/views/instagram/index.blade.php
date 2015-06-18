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
    <a class="hashtags">#DoSomethingOrg</a>
    <a class="hashtags">#ApathySucks</a>
    <a class="hashtags">#1in3ofus</a>
    <a class="hashtags">#MicCheckRacism</a>
    <a class="hashtags">#Suspended4What</a>
    <a class="hashtags">#ThumbWars</a>
    <a class="hashtags">#ComeBackClothes</a>
    <a class="hashtags">#TeensForJeans</a>
    <a class="hashtags">#NotBreakingNews</a>
    <a class="hashtags">#WeAreAble</a>
  </nav>
  

@stop
