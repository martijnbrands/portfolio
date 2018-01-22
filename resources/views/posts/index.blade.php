@extends('layouts.app')

@section('content')

<div class="container">
	@foreach ($posts as $post)

	<div class="row">
		<div data-aos="fade-up" data-aos-anchor-placement="top-center">
			<a href="{{ route('posts.show', $post->id) }}"><h1>{{ $post->title }}</h1></a>
			<p>{{ substr($post->description, 0, 50) }}{{ strlen($post->description) > 50 ? "..." : "" }}</p>
			<img src="{{$post->thumbnail}}" alt="">
			<a class="btn btn-block btn-primary" href="{{ route('posts.edit', $post->id) }}">Bewerk</a>
		</div>
	</div>
	
	@endforeach
</div>

@endsection
