@extends('base')


@section('content')
    @if ($posts->isEmpty())
    <h2 class="text-danger">Aucun article trouvé...</h2>
   @else
   <h1 class="mb-4 text-center">Liste des Articles</h1>
    <div class="row">
        @foreach ($posts as $post)
            <div class="mb-4 col-md-4">
                <div class="shadow-sm card h-100">
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ $post->title }}</h5>
                        <p class="card-text text-muted">
                            {{ Str::limit($post->content, 100) }}
                        </p>
                        <a href="{{ route('posts.show',$post) }}" class="btn btn-outline-primary">Lire la suite</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endif
@endsection
