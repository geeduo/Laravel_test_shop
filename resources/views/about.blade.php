@extends('layouts.main')
@section('content')
	<div>
	@foreach($posts as $post)
	<div>{{ $post->title}}</div>
	<div>{{ $post->likes}}</div>


	@endforeach
	</div>
@endsection