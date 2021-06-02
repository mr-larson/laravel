<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <div class="container px-5">
        <a class="navbar-brand myPurple" href="/">Coding School</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $page === "Contact" ? "active" : "" }}" href={{ route('contact') }}>Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page === "Services" ? "active" : "" }}" href="/services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page === "About" ? "active" : "" }}" href="/about">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
