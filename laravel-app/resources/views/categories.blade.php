@extends('template')

@section('container')
    <h1>Kategori Artikel</h1>
    <hr>
    @foreach ($categories as $category)

        <ul>
            <li>
                <h2><a href="/categories/{{ $category->slug }}"> {{ $category->name }}</a></h2>
            </li>       
        </ul>
                               
    @endforeach
@endsection