@csrf

<div class="mb-3">
  <label class="form-label">Titre</label>
  <input type="text" name="title" class="form-control" value="{{ old('title', $article->title ?? '') }}">
  @error('title') <div class="text-danger small">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
  <label class="form-label">Contenu</label>
  <textarea name="content" rows="6" class="form-control">{{ old('content', $article->content ?? '') }}</textarea>
  @error('content') <div class="text-danger small">{{ $message }}</div> @enderror
</div>

<button type="submit" class="btn btn-primary">Enregistrer</button>
<a href="{{ route('articles.index') }}" class="btn btn-secondary">Annuler</a>
