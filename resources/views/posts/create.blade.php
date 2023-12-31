    @extends('layouts.app')

    @section('title')
        Buat Postingan
    @endsection

    @section('content')
    <div class="container">
        <h1>Buat Postingan</h1>

        <form method="POST" action="{{url('/posts')}}" class="form-control">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Postingan</label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Konten Postingan</label>
                <textarea class="form-control" id="content" rows="3" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Buat Postingan</button>
        </form>

    </div>
    @endsection
