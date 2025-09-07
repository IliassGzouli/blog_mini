@extends('layouts.app')

@section('content')
    <h1>Nouvel Article</h1>

    <form method="POST" action="{{ route('articles.store') }}">
        @csrf
        <div class="mb-3">
            <label>Titre</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label>Contenu</label>
            <textarea name="content" class="form-control">{{ old('content') }}</textarea>
            @error('content')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
@endsection
