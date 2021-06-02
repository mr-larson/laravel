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

    {{-- slider --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src={{ asset("img/surf1.jpg") }} class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src={{ asset("img/surf2.jpg") }} class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src={{ asset("img/surf3.jpg") }} class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Copyright -->
    <footer class="bg-dark text-center text-white">
        <div class="text-center p-4 bg-dark">
          © 2021 Copyright
        </div>
    </footer>

    <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>