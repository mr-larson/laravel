<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

      <div class="row no-gutters">
        <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
          <div class="content">
            {{-- <h3>{{ $aboutTitre->h3 }}</h3> --}}
            <p>
             {{--  {{ $aboutTitre->p }} --}}
            </p>
            <a href="#" class="about-btn">About us <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
        <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              @foreach ($abouts as $about)  
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="{{ $about->icon }}"></i>
                  <h4>{{ $about->h4 }}</h4>
                  <p>{{ $about->p }}</p>
                </div>
              @endforeach
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
</section><!-- End About Section -->