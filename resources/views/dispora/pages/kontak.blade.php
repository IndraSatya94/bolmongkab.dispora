<!DOCTYPE html>
<html lang="en">

<head>
  @include('dispora.layout.head')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    @include('dispora.layout.header')
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>KONTAK</p>
          <hr>
        </header>

        <div class="row gy-4">

          <div class="col-lg-12">

          @foreach($kontaks as $kontak)
            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <p>{{$kontak->alamat}}</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone align-items-center"></i>
                  <h3>Telepon</h3>
                  <p>{{$kontak->telepon}}</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>{{$kontak->email}}</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Buka</h3>
                  <p>Senin - Jum'at<br>{{$kontak->buka}} - {{$kontak->tutup}}</p>
                </div>
              </div>
            </div>
          @endforeach

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section id="footer" className="text-center">
    @include('dispora.layout.footer')
  </section>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('dispora.layout.script')

</body>

</html>