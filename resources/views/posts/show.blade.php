<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT1946 | {{ $post->judul }}</title>
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('/css/blog.css') }}" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
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

    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>