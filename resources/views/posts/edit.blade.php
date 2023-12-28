<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT1946 | Edit Postingan</title>
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
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

    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>