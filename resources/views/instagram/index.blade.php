@extends('app')

@section('content')
  <h1 class="title"><img width="100" height="100" src="{{ asset('/images/dosomething.png')}}">DoSomething.org Instagram Feeds</h1>
  <!-- <link href="{{ asset('/css/instagram.css') }}" rel="stylesheet"> -->

  <input type="checkbox" id="tog" checked>
  <label for="tog" id="ham">
  </label>

  <nav>
    <h2 style = "padding-left: 50px">Hashtags</h2>
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
  
  <div class="instagram-feed"></div>
@stop
