@extends('layouts.app')
@section('title', "Judul: $post->judul")

    @section('content')
        
    <div class="container">
    <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1">{{ $post->judul }}</h2>
        <p class="blog-post-meta">{{ $post->created_at }}</p>

        <p>{{ $post->content }}</p>

        <small class="text-muted">{{ $total_comments }}Komentar</small>
        @foreach ($comments as $comment)
            <div class="card mb-2">
                <div class="card-body">
                    <p style="font-size: 8pt">{{ $comment->comment }}</p>
                </div>
            </div>
        @endforeach

      </article>
      <a href="{{ url('posts')}}" class="btn btn-primary">Kembali</a>
    </div>
    @endsection
