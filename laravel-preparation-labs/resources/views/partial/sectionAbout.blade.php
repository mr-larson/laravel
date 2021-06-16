<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

      <div class="row no-gutters">
        <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
          <div class="content">
            {{-- <h3>{{ $titres->h3 }}</h3> --}}
            <p>
              {{-- {{ $aboutTitres->p }} --}}
            </p>
            <a href="#" class="about-btn">About us <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
        <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              @foreach ($abouts as $about)
                        <div class="col-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon-boxes d-flex flex-column justify-content-center">
                                    <div class="icon-box {{ $about->id }}" data-aos="fade-up" data-aos-delay="100">
                                        <i class="{{ $about->icon }}"></i>
                                        <h4>{{ $about->h4 }}</a></h4>
                                        <p>{{ $about->p }}</p>
                                        <div class="buttons flex justify-center">
                                        {{--  @can('update', $about) --}}
                                                <a href="{{route('about.edit',$about->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                                        {{--  @endcan --}}
                                        {{--  @can('delete', $about) --}}
                                                <form action="{{ route('about.destroy',$about->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="bg-red-500 hover:bg-red-600 text-white px-1 rounded-lg m-2 w-auto text-center">Delete</button>
                                                </form>
                                        {{--  @endcan --}}
                                        </div>
                                    </div>
                            </div>
                        </div>
                        @endforeach
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
</section><!-- End About Section -->