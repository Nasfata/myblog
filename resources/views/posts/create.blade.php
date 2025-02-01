{{--  --}}
@extends("base")

@section("content")
<form action="{{ route("posts.store") }}" method="post">
    @csrf
    <div class="form-group">
      <label for="title">Tittre</label>
      <input type="text" class="form-control" id="title"  placeholder="Title" name="title" required>
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <input type="text" class="form-control" id="content" placeholder="Content" name="content" required>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter un Article</button>
</form>
@endsection
