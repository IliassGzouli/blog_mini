<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mini Blog')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container">
    <a class="navbar-brand" href="{{ route('articles.index') }}">Mini Blog</a>
    <div class="d-flex gap-2">
      <a href="{{ route('articles.create') }}" class="btn btn-primary">Nouvel Article</a>
    </div>
  </div>
</nav>
<div class="container">
    {{-- ✅ Flash messages (succès après CRUD) --}}
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- ✅ Ici, les vues enfants injectent leur contenu --}}
    @yield('content')
</div>
</body>
</html>
