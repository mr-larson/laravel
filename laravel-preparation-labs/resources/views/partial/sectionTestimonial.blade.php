<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Testimonials</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
            @foreach ($testimonials as $testimonial)
                
            <div class="swiper-slide">
                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        {{ $testimonial->p }}
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{asset($testimonial->img) }}" class="testimonial-img" alt="">
                    <h3>{{ $testimonial->h3 }}</h3>
                    <h4>{{ $testimonial->h4 }}</h4>
                </div>
            </div><!-- End testimonial item -->
            @endforeach
            
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->