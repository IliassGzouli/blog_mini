@extends('layouts.app')
@section('title', 'Nouvel Article')

@section('content')
  <h2 class="mb-3">Nouvel Article</h2>
  <form action="{{ route('articles.store') }}" method="POST">
    @include('articles._form')
  </form>
@endsection
