@extends('layouts.app')

@section('title')
    PT1946 | Edit Postingan
@endsection

    @section('content')
        
    <div class="container">
        <h1>Edit Postingan</h1>

        <form method="POST" action="{{ url("/posts/{$post->id}") }}" class="form-control">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Postingan</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $post->judul }}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Konten Postingan</label>
                <textarea class="form-control" id="content" rows="3" name="content">{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Update Postingan</button>
        </form>

        <form method="POST" action="{{ url("posts/$post->id") }}" class="form-control">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

    </div>
    @endsection