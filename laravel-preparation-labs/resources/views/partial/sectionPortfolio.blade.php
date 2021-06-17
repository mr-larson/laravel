<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{ $titres[3]->h2 }}</h2>
            <p>{{ $titres[3]->p }}</p>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
            </ul>
            </div>
        </div>

        <div class="row portfolio-container">

            @foreach ($portfolios as $portfolio)  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset("img/" . $portfolio->img) }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{ $portfolio->h4 }}</h4>
                        <p>{{ $portfolio->p }}</p>
                        <div class="portfolio-links">
                            <a href="{{asset("img/" . $portfolio->img) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>

    </div>
</section><!-- End Portfolio Section -->