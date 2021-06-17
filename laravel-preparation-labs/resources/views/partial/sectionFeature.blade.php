<!-- ======= Features Section ======= -->
<section id="features" class="features" data-aos="fade-up">
    <div class="container">


        <div class="section-title">
            <h2>{{ $titres[1]->h2 }}</h2>
            <p>{{ $titres[1]->p }}</p>
        </div>
        @foreach ($features as $i=> $feature)

            @if ($i%2==0) 
                <div class="row content">
                    <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('img/'.$feature->img) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
                        <h3>{{ $feature->h3 }}</h3>
                        <i>
                            {{ $feature->i }}  
                        </i>
                        <ul>
                            <li><i class="bi bi-check"></i>{{ $feature->li1 }}</li>
                            <li><i class="bi bi-check"></i>{{ $feature->li2 }}</li>
                            <li><i class="bi bi-check"></i>{{ $feature->li3 }}</li>
                        </ul>
                    </div>
                </div>
            
            @else
                <div class="row content">
                    <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                        <img src="{{ asset('img/'.$feature->img) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                        <h3>{{ $feature->h3 }}</h3>
                        <i>
                            {{ $feature->i }}
                        </i>
                        <p>
                            {{ $feature->p }}
                        </p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</section><!-- End Features Section -->