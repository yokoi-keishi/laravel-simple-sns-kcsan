@csrf
<div class="md-form">
  <label for="">タイトル</label>
  <input type="text" name="title" id="title" class="form-control" required value="{{ $article->title ?? old('title') }}">
</div>

<div class="form-group">
  <article-tags-input
  :initial-tags='@json($tagNames ?? [])'
  :autocomplete-items='@json($allTagNames ?? [])'
  ></article-tags-input>
</div>

<div class="form-group">
  <label for=""></label>
  <textarea name="body" id="body" cols="30" rows="16" required class="form-control" placeholder="本文">{{ $article->body ?? old('body') }}</textarea>
</div>