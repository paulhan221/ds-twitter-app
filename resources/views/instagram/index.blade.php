@extends('app')

@section('content')
  <h1 class="title"><img width="100" height="100" src="{{ asset('/images/dosomething.png')}}">DoSomething.org Instagram Feeds</h1>
  <!-- <link href="{{ asset('/css/instagram.css') }}" rel="stylesheet"> -->

  <input type="checkbox" id="tog" checked>
  <label for="tog" id="ham">
    <span></span>
    <span></span>
    <span></span>
  </label>
    <nav>
      <h2 style = "padding-left: 50px">Hashtags</h2>

      {!! Form::open(['url' => '/hashtags']) !!}
        {!! Form::text('title', null) !!}
      {!! Form::close() !!}

      <a class="hashtags btn btn-3">#DoSomethingOrg</a>
      <a class="hashtags btn btn-3">#ApathySucks</a>
      <a class="hashtags btn btn-3">#1in3ofus</a>
      <a class="hashtags btn btn-3">#MicCheckRacism</a>
      <a class="hashtags btn btn-3">#Suspended4What</a>
      <a class="hashtags btn btn-3">#ThumbWars</a>
      <a class="hashtags btn btn-3">#ComeBackClothes</a>
      <a class="hashtags btn btn-3">#TeensForJeans</a>
      <a class="hashtags btn btn-3">#NotBreakingNews</a>
      <a class="hashtags btn btn-3">#WeAreAble</a>

      </div>
    </nav>

  <div class="">
    <div class="instagram-feed">
      @foreach($instagrams as $instagram)
        <div class="grid-item thumbnail">
            @if(isset($instagram["videos"]))
              <video controls src="{{ $instagram["videos"]}}" class="vids">Your Browser does not support the video tag</video>
            @else
              <img class="pics" src = {{ $instagram["picture"] }} />
            @endif
            <br>
            <div class="caption">
          <a href="http://instagram.com/{{ $instagram["username"] }}"><img src={{ $instagram["profile_picture"] }} class = "profile-pic"></a>
              <h3><a href="http://instagram.com/{{ $instagram["username"] }}">{{ $instagram["username"] }}</a></h3>
              {{ $instagram["caption"] }}
            </div>
            {{ $instagram["likes_count"]}} likes
        </div>
      @endforeach
    </div>
  </div>
@stop
