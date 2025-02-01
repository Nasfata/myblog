@extends('base')

@section('content')
    <h1 class="mb-4 text-center">Liste des Articles</h1>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <a href="{{ route('posts.create') }}" class="mb-3 btn btn-primary">Créer un Article</a>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Extrait</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ e(Str::limit($post->content, 50)) }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">Voir</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline"
                              onclick="return confirm('Voulez-vous vraiment supprimer cet article ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
