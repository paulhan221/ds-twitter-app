@extends('app')

@section('content')
  @foreach($instagrams as $instagram)
  @if(isset($instagram["videos"]))
    <video src="{{ $instagram["videos"]}}" autoplay loop>Your Browser does not support the video tag</video>
  @else
    <img src= {{ $instagram["picture"] }} />
@endif
<br>
    {{ $instagram["username"] }}<br>
    {{ $instagram["likes_count"]}}<br><br>
  @endforeach
@stop
