<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{ asset("css/app.css") }}>
</head>
<body>
    @include('nav')

    <div class="bg-primary p-5 mb-0">
        @foreach ($personne as $key=>$item)
            <h1 class="list-group-item">{{ $key }} = {{ $item }}</h1>
        @endforeach

        {{ $personne->prenom }}
    </div>

    <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>