@extends('layouts.main')
@section('container')
    <h1>Halaman Single Post</h1>

    <article class="mb-5">
        <h2>{{ $post['title'] }}</h2>
        <h5>{{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    </article>

    <a href="/berita" class="btn btn-primary" role="button">Back</a>
@endsection
