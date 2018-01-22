@extends('layouts.app')

@section('content')
<div class="container">
	@foreach ($posts as $post)
		<a href="{{ route('posts.show', $post->id) }}">
			<h1>{{ $post->title }}</h1>
			<p>{{ substr($post->description, 0, 50) }}{{ strlen($post->description) > 50 ? "..." : "" }}</p>
			<img src="{{$post->thumbnail}}" alt="">
			<a class="btn btn-block btn-primary" href="{{ route('posts.edit', $post->id) }}">Bewerk</a>
		</a>
	@endforeach
</div>
@endsection
