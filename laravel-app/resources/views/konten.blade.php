@extends('template')

@section('container')
<article class="mb-5">
    <h3>{{ $article->title }}</h3>
    <h6>By: {{ $article->author }} in <a href="/categories/{{ $article->category->slug }}"> {{ $article->category->name }}</a></h6>
    <p>{{ $article->body }}</p>
    <a href="/article">Back to articles</a>
</article>
@endsection