@extends('layouts.app')

@section('title', 'Create')

@section('content')
<div class="container">
    <form class="row" method="POST" action="/posts" enctype="multipart/form-data">{{ csrf_field() }}
        <div class="group{{ $errors->has('title') ? ' has-error' : '' }}">  
            <input class="form-control" type="text" name="title" id="title" value="{{ old('title') ?('title') : '' }}"/>
            @if ($errors->has('title'))
                <p>{{ $errors->first('title') }}</p>
            @endif
            <label for="title">Title</label>
        </div>

        <div class="group{{ $errors->has('description') ? ' has-error' : '' }}">  
            <textarea class="form-control" type="text" name="description" id="description" value="{{ old('description') ? old('description') : '' }}"/></textarea>
            @if ($errors->has('description'))
                <p>{{ $errors->first('description') }}</p>
            @endif
            <label for="description">Description</label>
        </div>

        <div class="group{{ $errors->has('color') ? ' has-error' : '' }}">  
            <input class="form-control" type="text" name="color" id="color" value="{{ old('color') ?('color') : '' }}"/>
            @if ($errors->has('color'))
                <p>{{ $errors->first('color') }}</p>
            @endif
            <label for="color">Color</label>
        </div>

        <div class="group{{ $errors->has('color') ? ' has-error' : '' }}">  
            <input class="form-control" type="file" name="thumbnail" id="thumbnail" value="{{ old('thumbnail') ?('thumbnail') : '' }}"/>
            @if ($errors->has('thumbnail'))
                <p>{{ $errors->first('thumbnail') }}</p>
            @endif
            <label for="thumbnail">Color</label>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-block btn-success">Toevoegen</button>
            <a href="/" class="btn btn-block btn-danger">Annuleren</a>
        </div>
    </form>
    <example-component></example-component>
</div>
@endsection
