@extends('app')

@section('content')

	<h1>Popular Tweets for @DoSomething</h1>

	@foreach ($tweets as $tweet)
		<div class="container">
			<a href="http://twitter.com/{{ $tweet["user"]["screen_name"] }}"><img src= {{ $tweet["user"]["profile_image_url"] }} alt="avatar" class="avatar"/></a>
		  
		  <time class="tweet-time">{{ preg_replace('/\+\S+/', '', $tweet["created_at"]) }}</time>
		  
		  <div class="push">
		    
		    <div class="user">
		      <div class="user-string"><span class="name"><a href="http://twitter.com/{{ $tweet["user"]["screen_name"] }}">{{ $tweet["user"]["name"] }}</a></span><span class="username"><a href="http://twitter.com/{{ $tweet["user"]["screen_name"] }}">{{ $tweet["user"]["screen_name"] }}</a>
					{{ $tweet["user"]["location"] }}</span></div>
		    </div>
		    
		    <blockquote class="tweet"><span class="at"> </span>{{ $tweet["text"] }} <span class="tag">#tags</span></blockquote>
		    
		  </div>
		  
		</div>

	@endforeach

@endsection('content')
