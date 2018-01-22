@extends('layouts.app')

@section('content')

    <div class="row">
{{--         {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
        <div class="col-md-8">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null) }}
            
            {{ Form::label('description', "Description:") }}
            {{ Form::textarea('description', null) }}
        </div>

        <div class="row">
            <div class="col-sm-6">
                {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
            </div>
            <div class="col-sm-6">
                {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
            </div>
        </div>
        {!! Form::close() !!} --}}
    </div>  <!-- end of .row (form) -->

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

@stop