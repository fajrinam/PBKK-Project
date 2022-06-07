@extends('template')

@section('container')
    <h1>Halaman Artikel Berita</h1>
    <h5>editor: {{ $name }} | {{ $email }}</h5>
    <hr/>
    @foreach($articles as $article)
        <article class="mb-5">
            <h3>
                <a href="/article/{{ $article->slug }}">
                {{ $article->title }}
                </a>                    
            </h3>
            <h6>By: {{ $article->author }}</h6>
            <p>{{ $article->excerpt }}</p>
        </article>
    @endforeach
@endsection