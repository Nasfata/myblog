@extends('base')


@section('content')
    <h1 class="mb-4 text-center">Details d'un Article</h1>

    <div class="row">
                <div class="shadow-sm card h-100">
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ $post->title }}</h5>
                        <p class="card-text text-muted">
                            {{ $post->content }}
                        </p>
                        <a href="{{ route('posts.index') }}" class="btn btn-outline-success">Retour</a>
                    </div>
                </div>
    </div>
@endsection
