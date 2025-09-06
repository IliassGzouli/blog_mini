@extends('layouts.app')
@php use Illuminate\Support\Str; @endphp
@section('title', 'Articles')

@section('content')
  <h2 class="mb-3">Articles</h2>

  <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">Nouvel Article</a>

  @if($articles->count())
    <ul class="list-group mb-3">
      @foreach ($articles as $article)
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div>
            <strong>{{ $article->title }}</strong>
            <div class="text-muted">{{ Str::limit($article->content, 120) }}</div>
          </div>
          <div class="ms-3 d-flex gap-2">
            <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-outline-primary">Modifier</a>
            <form action="{{ route('articles.destroy', $article) }}" method="POST" onsubmit="return confirm('Supprimer cet article ?');">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-outline-danger">Supprimer</button>
            </form>
          </div>
        </li>
      @endforeach
    </ul>

    {{ $articles->links() }}
  @else
    <div class="alert alert-info">Aucun article pour le moment.</div>
  @endif
@endsection
