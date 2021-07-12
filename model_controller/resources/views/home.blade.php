<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model & Controller</title>
</head>

<body>
    <h1>model e controller</h1>

    @foreach ($movies as $movie)
    <div class="card">
        <img src="{{$movie->poster}}" alt="{{$movie->title}}">
        <h3>{{ $movie->title}}</h3>
    </div>

    @endforeach
</body>

</html>