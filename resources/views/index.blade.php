@extends('layouts.app')

@section('title', 'Martijn Brands')

@section('content')

<div class="container post-list">
	@foreach ($posts as $post)
		<article class="post" data-aos="fade-up" data-aos-anchor-placement="top-center">
			<a href="{{ route('posts.show', $post->id) }}">
				<h2>{{ $post->title }}</h2>
				<img src="/images/uploads/{{$post->thumbnail}}" alt="{{ $post->title }}">
			</a>
			{{-- <p>{{ substr($post->description, 0, 50) }}{{ strlen($post->description) > 50 ? "..." : "" }}</p> --}}
			
{{-- 			<a class="btn btn-block btn-primary" href="{{ route('posts.edit', $post->id) }}">Bewerk</a> --}}
		</article>
	
	@endforeach
</div>

@endsection