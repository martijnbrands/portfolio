@extends('layouts.app')

@section('content')
<div class="container">
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->description }}</p>
    <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">Bewerk</a>
</div>
@endsection
