@extends('app')

@section('content')
  <h1 class="title"><img width="100" height="100" src="{{ asset('/images/dosomething.png')}}">Instagram Feeds</h1>
  <!-- <link href="{{ asset('/css/instagram.css') }}" rel="stylesheet"> -->
  <h2 class="hashtagTitle">#ApathySucks</h2>

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
        {!! Form::button('<i class="fa fa-plus"></i>',['type'=>'submit']) !!}
      {!! Form::close() !!}
      <ul class="navigation">

      @foreach($hashtags as $hashtag)
        <div class="btn">
          <a class="hashtags">#{{ $hashtag['original']['title'] }}</a>
          <div class="delete-button">
            {!! Form::open(['method'=> 'DELETE', 'url'=>'/hashtags/'.$hashtag->id]) !!}
              {!! Form::button('<i class="fa fa-trash-o"></i>', ['type' => 'submit']) !!}
            {!! Form::close() !!}
          </div>
        </div>
      @endforeach
      </div>

      </ul>
    </nav>

  <div class="">
    <div class="instagram-feed">
      @foreach($instagrams as $instagram)
        <div class="grid-item thumbnail">
            @if(isset($instagram["videos"]))
              <video src="{{ $instagram["videos"]}}" class="vids" autoplay="autoplay" loop="loop" muted="muted">Your Browser does not support the video tag</video>
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
            <p class="time-interval">
             {{ $instagram["time_interval"]}} ago
           </p>

        </div>
      @endforeach
    </div>
  </div>
@stop
