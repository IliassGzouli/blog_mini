@extends('layouts.app')
@php use Illuminate\Support\Str; @endphp
@section('title', 'Articles')

@section('content')
  <h2 class="mb-3">Articles</h2>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif
  <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">Nouvel Article</a>
  
<form method="GET" action="{{ route('articles.index') }}" class="mb-3 d-flex">
    <input type="text" name="search" class="form-control me-2"
           placeholder="Rechercher un article..."
           value="{{ request('search') }}">
    <button type="submit" class="btn btn-outline-primary">Rechercher</button>
</form>

  @if($articles->count())
    <ul class="list-group mb-3">
      @foreach ($articles as $article)
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div>
            <strong>{{ $article->title }}</strong>
            <div class="text-muted">{{ Str::limit($article->content, 120) }}</div>

            {{-- Lien Afficher les détails --}}
            <a href="{{ route('articles.show', $article) }}" 
               class="text-decoration-underline text-primary">
               Afficher les détails
            </a>
          </div>
          <div class="ms-3 d-flex gap-2">
            <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-outline-primary">Modifier</a>
            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline-block;">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-outline-danger">Supprimer</button>
            </form>
          </div>
        </li>
      @endforeach
    </ul>

    <div class="mt-3">
        {{ $articles->links() }}
    </div>
  @else
    <div class="alert alert-info">Aucun article pour le moment.</div>
  @endif
@endsection
