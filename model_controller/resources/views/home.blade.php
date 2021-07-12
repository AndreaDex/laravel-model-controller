<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model & Controller</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:regular,italic,700,700italic" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>

    <div class="gallery">

        @foreach ($movies as $movie)
        <div class="card">
            <img src="{{$movie->poster}}" alt="{{$movie->title}}">
            <h3>{{ $movie->title}}</h3>
            <span>{{ $movie->release_date}}</span>
            <div class="desc">
                <p>{{ $movie->overview}}</p>
            </div>

        </div>

        @endforeach
    </div>
</body>

</html>