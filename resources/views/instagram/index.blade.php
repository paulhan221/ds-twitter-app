@extends('app')

@section('content')
  @foreach($instagrams as $instagram)
  @if(isset($instagram["videos"]))
  	<!-- <div class="video"> -->
  	<!-- </div> -->

    <video controls src="{{ $instagram["videos"]}}" >Your Browser does not support the video tag</video>
	  Your browser does not support the video tag.
  @else
    <img src= {{ $instagram["picture"] }} />
@endif
<br>
    {{ $instagram["username"] }}<br>
    {{ $instagram["likes_count"]}}<br><br>
  @endforeach
@stop