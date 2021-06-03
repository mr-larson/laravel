<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Services</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>
      <div class="row gy-4">
        @foreach ($services as $service)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box {{ $service->color }} ">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    {!! $service->shape !!}
                  </svg>
                  <i class="{{ $service->icon }}"></i>
                </div>
                <h4><a href="">{{ $service->title }}</a></h4>
                <p>{{ $service->text }}</p>
              </div>
            </div>    
  
        @endforeach

      </div>

    </div>
  </section><!-- End Services Section -->