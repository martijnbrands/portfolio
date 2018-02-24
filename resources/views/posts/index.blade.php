@extends('layouts.app')

@section('title', 'Martijn Brands')

@section('content')

<div class="container post-list">
	@foreach ($posts as $post)
		<article class="post" data-aos="fade-up" data-aos-anchor-placement="top-center">
			<a href="{{ route('posts.show', $post->slug) }}">
				<h2>{{ $post->title }}</h2>
				<img src="/images/uploads/{{$post->thumbnail}}" alt="{{ $post->title }}">
			</a>
		</article>
	
	@endforeach
</div>

@endsection