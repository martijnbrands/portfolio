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

    <div class="form-group">
        <button type="submit" class="button">Toevoegen</button>
        <a href="/home" class="button">Annuleren</a>
    </div>
</form>