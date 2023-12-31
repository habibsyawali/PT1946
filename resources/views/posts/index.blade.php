@extends('layouts.app')


@section('title')
    Pojok Trikoyo 1946
@endsection

@section('content')
    <div class="container">
        <h1>Pojok Trikoyo 1946</h1>
        <a href="{{url('posts/create')}}" class="btn btn-success mb-2">+ Buat Postingan</a>

        @foreach($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $post->judul }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                <p class="card-text"><small class="text-muted">Last Updated at {{ date("d-M-Y H:i", strtotime($post->created_at)) }}</small></p>
                <a href="{{ url("posts/$post->id") }}" class="btn btn-primary">Selengkapnya</a>
                <a href="{{ url("posts/$post->id/edit") }}" class="btn btn-warning">Edit</a>
            </div>
        </div>
    @endforeach  
@endsection