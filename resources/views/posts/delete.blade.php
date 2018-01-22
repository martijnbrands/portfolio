@extends('layouts.app')

@section('content')

<h1>{{ $post->title }}</h1>
<p class="lead">{{ $post->description }}</p>
<hr>

<div class="row">
    <div class="col-md-6">
        <a href="{{ route('posts.index') }}" class="btn btn-info">Back to all posts</a>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit post</a>
    </div>
    <div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['posts.destroy', $post->id]
        ]) !!}
            {!! Form::submit('Delete this post?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
</div>

@stop