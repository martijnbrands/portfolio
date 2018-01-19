@extends('layouts.app')

@section('content')
<div class="container">
	@foreach ($posts as $post)
		<h1>{{ $post->title }}</h1>
		<p>{{ substr($post->description, 0, 50) }}{{ strlen($post->description) > 50 ? "..." : "" }}</p>
		<img src="{{$post->thumbnail}}" alt="">
	@endforeach
</div>
@endsection
