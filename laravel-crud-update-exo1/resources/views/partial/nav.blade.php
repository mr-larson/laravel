<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <div class="container-fluid">
        <a class="navbar-brand" href={{ route('home') }}>Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $page === "article" ? "active" : "" }}" href={{ route('article') }}>article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page === "entreprise" ? "active" : "" }}" href={{ route('entreprise') }}>entreprise</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page === "portfolio" ? "active" : "" }}" href={{ route('portfolio') }}>portfolio</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
