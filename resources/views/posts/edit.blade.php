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

                <div class="form-group">
                    {!! Form::label('color', 'Color:', ['class' => 'control-label']) !!}
                    {!! Form::text('color', null, ['class' => 'form-control']) !!}
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


{{-- @section('content')
<div class="container">
    <form class="row" method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">{{ csrf_field() }}
        
        <div class="form-group">
            <div class="group{{ $errors->has('title') ? ' has-error' : '' }}">  
                <label for="title">Title</label>
                <input id="title" class="form-control" name="title" type="text" value="{{ old('title') }}"/>

                @if ($errors->has('title'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="group{{ $errors->has('description') ? ' has-error' : '' }}">  
                <label for="description">Description</label>
                <input id="description" class="form-control" name="description" type="text" value="{{ old('description') }}"/>

                @if ($errors->has('description'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="group{{ $errors->has('color') ? ' has-error' : '' }}">  
                <label for="color">Color</label>
                <input id="color" class="form-control" name="color" type="text" value="{{ old('color') }}"/>

                @if ($errors->has('color'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('color') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="group{{ $errors->has('thumbnail') ? ' has-error' : '' }}">  
                <label for="thumbnail">Thumbnail</label>
                <input id="thumbnail" class="form-control" name="thumbnail" type="file" value="{{ old('thumbnail') }}"/>

                @if ($errors->has('thumbnail'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('thumbnail') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Toevoegen</button>
            <a href="/" class="btn btn-danger pull-right">Annuleren</a>
        </div>
    </form>
</div>
@endsection --}}