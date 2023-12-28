<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pojok Trikoyo 1946</title>
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
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
        

    </div>

    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>