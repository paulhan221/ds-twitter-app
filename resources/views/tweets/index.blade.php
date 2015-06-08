@extends('app')

@section('content')
	
	@foreach ($tweets as $tweet)
		<p> {{ $tweet }}</p>
	@endforeach

@endsection('content')
