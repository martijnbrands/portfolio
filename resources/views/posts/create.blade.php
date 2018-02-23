@extends('layouts.app')

@section('title', 'Create')

@section('content')
<div class="container">
    <form class="row" method="POST" action="/posts" enctype="multipart/form-data">{{ csrf_field() }}

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
            <div class="custom-control custom-radio">
                <input type="radio" id="textColor" name="textColor" value="#f1f1f1" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1">White color</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="textColor" name="textColor" value="#212121" class="custom-control-input">
                <label class="custom-control-label" for="customRadio2">Black color</label>
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
@endsection