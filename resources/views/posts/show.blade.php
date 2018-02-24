@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background: {{ $post->color }}; color: {{ $post->textColor }}; ">
    <div class="container post-detail">
        <a class="close-btn" href="/">
            <span></span>
        </a>
        <h3>{{ $post->title }}</h3>
        <p>{!! $post->description !!}</p>
        @auth
            <a class="btn btn-primary" href="{{ route('posts.edit', $post->slug) }}">Bewerk</a>
        @endauth
    </div>
</div>
@endsection