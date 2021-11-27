@extends('layouts.main')
@section('content')
	<div>
	@foreach($posts as $post)
	<div>{{ $post->content}}</div>


	@endforeach
	</div>
@endsection