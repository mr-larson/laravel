<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{ $titres[2]->h2 }}</h2>
            <p>{{ $titres[2]->p }}</p>
        </div>

        <div class="row">
            @foreach ($services as $service)  
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="{{ $service->icon }}"></i></div>
                        <h4 class="title"><a href="">{{ $service->title }}</a></h4>
                        <p class="description">{{ $service->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section><!-- End Services Section -->