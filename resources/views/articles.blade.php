@extends('navbar.navbar')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Articles</h1>
    <ul class="list-group">
        @foreach($articles as $article)
        <li class="list-group-item">
            <h5>{{ $article->title }}</h5>
            <p>Published: {{ $article->published_at }}</p>
            <img src="{{ $article->photo }}" class="img-fluid rounded mb-2" alt="{{ $article->title }}">
            <p>Description: {{ $article->description }}</p>
        </li>
        @endforeach
    </ul>
</div>
@endsection
