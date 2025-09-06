@extends('layouts.app')
@section('title', 'Modifier Article')

@section('content')
  <h2 class="mb-3">Modifier : {{ $article->title }}</h2>
  <form action="{{ route('articles.update', $article) }}" method="POST">
    @method('PUT')
    @include('articles._form')
  </form>
@endsection
