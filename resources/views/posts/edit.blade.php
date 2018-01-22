@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>{{ $post->title }}</h1>
        <p class="lead">{{ $post->description }}</p>
        <hr>
        <div class="row">
            <div class="col-md-6 text-right">
                {!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['posts.destroy', $post->id]
                ]) !!}
                {!! Form::submit('Delete this post?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        <div class="row">
                       {!! Form::model($post, [
                'method' => 'PATCH',
                'route' => ['posts.update', $post->id]
            ]) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Update post', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@stop