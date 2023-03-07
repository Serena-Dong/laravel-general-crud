<!DOCTYPE html>

<!-- test -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <h1 class="text-center mt-5 mb-5"> Carte collezionabili magic </h1>

    <div class="container d-flex justify-content-center mb-3">
        <a class="btn btn-success" href="{{route('cards.create')}}">Aggiungi una nuova carta</a>
    </div>

    <div class="d-flex flex-wrap card-container container">
        @foreach ($cards as $card)
            <div class="single-card d-flex flex-column align-items-center">
                <a href="{{route('cards.show', $card['id'])}}">
                    <img src="{{$card->img}}" alt="immagine" width="250" class="p-3">
                </a>
            </div>
        @endforeach
    </div>

</body>

</html>