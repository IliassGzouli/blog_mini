@extends('layouts.app')

@section('title', $article->title)

@section('content')
<h2 class="mb-3">Détails de  : {{ $article->title }}</h2>
  <h2>{{ $article->title }}</h2>

  <p class="text-muted">
    Publié le {{ $article->created_at->format('d/m/Y') }}
  </p>

  <div class="mb-3">
    {{ $article->content }}
  </div>

  <a href="{{ route('articles.index') }}" class="btn btn-secondary">← Retour aux articles</a>
@endsection
