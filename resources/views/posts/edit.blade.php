@extends('layouts.app')

@section('title', 'Edit')

@section('content')
    <div class="container">
        <h3>Edit Post</h3>
        <div class="row">
            <div class="col-md-12">
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

                {!! Form::submit('Update post', ['class' => 'btn btn-primary pull-left']) !!}

                {!! Form::close() !!}

                {!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['posts.destroy', $post->id]
                ]) !!}
                {!! Form::submit('Delete this post?', ['class' => 'btn btn-danger pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@stop