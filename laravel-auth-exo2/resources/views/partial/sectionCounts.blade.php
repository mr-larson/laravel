<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
    <div class="container">

      <div class="row counters">
          @foreach ($chiffres as $chiffre)
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="{{ $chiffre->figure }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>{{ $chiffre->text }}</p>
            </div>
          @endforeach
      </div>
    </div>

</section><!-- End Counts Section -->