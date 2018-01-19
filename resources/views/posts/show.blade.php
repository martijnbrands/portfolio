@extends('layouts.app')

@section('content')
<div class="container" style="background:{{ $post->color }}">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->description }}</p>
</div>
@endsection
