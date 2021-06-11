<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>volleyball</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <link rel="stylesheet" href="{{ asset("css/main.css") }}">

</head>
<body>

    <section class="bg-gray-100 min-h-screen">

        @yield('content')
    </section>

    <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>