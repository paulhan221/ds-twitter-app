@extends('app')

@section('content')
	
	@foreach ($tweets as $tweet)
		<li>
			<a href="http://twitter.com/{{ $tweet["user"]["screen_name"] }}"><img src= {{ $tweet["user"]["profile_image_url"] }}> </a>
			<a href="http://twitter.com/{{ $tweet["user"]["screen_name"] }}">{{ $tweet["user"]["screen_name"] }}</a>
			{{ $tweet["user"]["location"] }} <br>
			<strong>{{ $tweet["text"] }}</strong>
			tweeted on: {{ preg_replace('/\+\S+/', '', $tweet["created_at"]) }}

		</li>
	@endforeach

@endsection('content')
