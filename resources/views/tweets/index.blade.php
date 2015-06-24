@extends('app')

@section('content')
<link href="{{ asset('/css/tweet.css') }}" rel="stylesheet">
	<h1>Popular Tweets for @DoSomething</h1>

	@foreach ($tweets as $tweet)
		<div class="container">
			<a href="http://twitter.com/{{ $tweet["screen_name"] }}"><img src= {{ $tweet["profile_pic"] }} alt="avatar" class="avatar"/></a>
		  
		  <time class="tweet-time">{{ preg_replace('/\+\S+/', '', $tweet["tweet_time"]) }}</time>
		  
		  <div class="push">
		    
		    <div class="user">
		      <div class="user-string"><span class="name"><a href="http://twitter.com/{{ $tweet["screen_name"] }}">{{ $tweet["name"] }}</a></span><span class="username"><a href="http://twitter.com/{{ $tweet["screen_name"] }}">{{ $tweet["screen_name"] }}</a>
					{{ $tweet["location"] }}</span></div>
		    </div>
		    
		    <blockquote class="tweet">
		    	<span class="at"> </span>{{ $tweet["text"] }}
		    	<!-- <span class="tag">#tags</span> -->
		    </blockquote>
		    
		  </div>
		  
		</div>

	@endforeach

@endsection('content')
