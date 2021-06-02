<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fruits</title>
    <link rel="stylesheet" href={{ asset("css/app.css") }}>
</head>
<body>
    {{-- nav --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/date">Date</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/fruits">Fruits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/bonus">Bonus</a>
                </li>
            </ul>
          </div>
        </div>
    </nav>

    {{-- tableau fruits --}}
    <h1 class="bg-light text-center p-4 font-weight-bold">Liste de fruits</h1>
    <ul class="bg-primary p-5 mb-0">
        @foreach ($Fruits as $key=>$item)
            <li class="list-group-item">{{ $key+1 }}  {{ $item }}</li>
        @endforeach
    </ul>
    

    <!-- Copyright -->
    <footer class="bg-dark text-center text-white">
      <div class="text-center p-4 bg-dark">
        © 2021 Copyright
      </div>
    </footer>

    <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>