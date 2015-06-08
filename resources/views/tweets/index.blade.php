@extends('app')

@section('content')
	<h1>Popular Tweets for @DoSomething</h1>
	@foreach ($tweets as $tweet)
<!-- 			<a href="http://twitter.com/{{ $tweet["user"]["screen_name"] }}"><img src= {{ $tweet["user"]["profile_image_url"] }}> </a>
			<a href="http://twitter.com/{{ $tweet["user"]["screen_name"] }}">{{ $tweet["user"]["screen_name"] }}</a>
			{{ $tweet["user"]["location"] }} <br>
			{{ $tweet["text"] }}
			{{ preg_replace('/\+\S+/', '', $tweet["created_at"]) }} -->
<div class="container">
	<a href="http://twitter.com/{{ $tweet["user"]["screen_name"] }}"><img src= {{ $tweet["user"]["profile_image_url"] }} alt="avatar" class="avatar"/></a>
	<!-- <img src="https://unsplash.imgix.net/photo-1421986527537-888d998adb74?q=75&fm=jpg&s=e633562a1da53293c4dc391fd41ce41d" alt="avatar" class="avatar"/> -->
  
  <time class="tweet-time">{{ preg_replace('/\+\S+/', '', $tweet["created_at"]) }}</time>
  
  <div class="push">
    
    <div class="user">
      <div class="user-string"><span class="name"><a href="http://twitter.com/{{ $tweet["user"]["screen_name"] }}">{{ $tweet["user"]["name"] }}</a></span><span class="username"><a href="http://twitter.com/{{ $tweet["user"]["screen_name"] }}">{{ $tweet["user"]["screen_name"] }}</a>
			{{ $tweet["user"]["location"] }}</span></div>
    </div>
    
    <blockquote class="tweet"><span class="at"> </span>{{ $tweet["text"] }} <span class="tag">#tags</span></blockquote>

   <div class="icons">
     <i class="fa fa-reply"><span class="icon-number"> 10</span></i>
     <i class="fa fa-retweet"><span class="icon-number"> 41</span></i>
     <i class="fa fa-star"><span class="icon-number"> 49</span></i>
     <i class="fa fa-ellipsis-h"></i>
     <i class="fa fa-eye"></i>
   </div>
    
  </div>
  
</div>

	@endforeach

@endsection('content')
