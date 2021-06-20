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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
  @foreach ($slide1 as $sli)
  <div class="hero"  style="background: url(image/slide/{{ $sli->image }}) top center no-repeat;   width: 100%;
  height: 100vh; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">{{ $sli->caption }}</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">{{ $sli->body }}</h2>
          <div data-aos="fade-up" data-aos-delay="600">
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <header class="section-header">
          <p>TENTANG</p>
          <hr>
        </header>

        <div class="row">
          <div class="col-xl-6 col-lg-7" data-aos="fade-right">
            <img src="assets/img/dispora-2.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Dinas pemuda dan olaharaga</h3>
            <hr>
            <p data-aos="fade-up">
              Dinas Kepemudaan dan Olahraga Provinsi Bolaang mongondow sebagai salah satu perangkat daerah dalam peningkatan prestasi olahraga dan potensi pemuda yang mempunyai tugas dan fungsi sebagai katalisator dan dinamisator pelaksana pembangunan khususnya di bidang Kepemudaan dan Keolahragaan harus  dapat menciptakan iklim masyarakat yang mampu memberdayakan dirinya sendiri untuk ikut serta berpartisipasi dalam pelaksanaan pembangunan bidang Pemuda dan olahraga.
            </p>
            <p data-aos="fade-up">
              Sehingga diharapkan dalam pelaksanaan pembangunan dapat berhasil guna dan berdaya guna dengan keterlibatan semua komponen masyarakat.
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

      </div>
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <div class="section-titlequote">
          <h2>CABANG OLAHRAGA</h2>
          <hr>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">
          @foreach($olahragas as $olahraga)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile mt-auto">
                  <img src="/image/olahraga/{{ $olahraga->image }}" class="testimonial-img" alt="">
                  <h3>{{$olahraga->nama}}</h3>
                </div>
                <p>
                {{$olahraga->body}}
                </p>
              </div>
            </div><!-- End testimonial item -->
          @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- End Testimonials Section -->

     <!-- ======= Blog Section ======= -->
     <section id="blog" class="blog">
      <div class="container">
        <header class="section-header">
          <p>BERITA TERBARU</p>
          <hr>
        </header>
        <div class="row">
        @foreach($recents as $berita)
          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/berita/beritadispora1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{ route('berita-detail',$berita->id) }}">{{$berita->judul}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="berita-detail.html">{{$berita->user->level}}</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="berita-detail.html"><time datetime="2020-01-01">{{$berita->created_at}}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                {{$berita->konten}}
                </p>
                <div class="read-more">
                  <a href="{{ route('berita-detail',$berita->id) }}">Selengkapnya...</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>
          @endforeach

        </div>

        <div class="blog-pagination" data-aos="fade-up">
          <ul class="justify-content-center">
            <li class="disabled"><i class="icofont-rounded-left"></i></li>
            <li><a href="{{ ('v-berita') }}">Lainnya</a></li>
          </ul>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <section id="quotes" class="quotes">
      <div class="container">

        <div class="section-titlequote">
          <h2>QUOTES</h2>
          <hr>
        </div>

        <div class="row">
            <div class="icon-box">
              <!-- <i class="icofont-users-social"></i> -->
              <p>Jangan tanyakan apa yang bangsa ini berikan kepada Anda.
                <br>
                 Tapi tanyakan apa yang sudah Anda berikan kepada negara.
                <br><br>
                 - Ir. Soekarno
              </P>
              </div>
      </div>
    </section><!-- End quotes Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>KONTAK</p>
          <hr>
        </header>

        <div class="row gy-4">

          <div class="col-lg-12">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <p>Lalow, Lolak, Kabupaten Bolaang Mongondow<br>Sulawesi Utara</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone align-items-center"></i>
                  <h3>Telepon</h3>
                  <p>+62 -</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>Dishub.bolmong@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Buka</h3>
                  <p>Senin - Jum'at<br>07.30 - 16.00</p>
                </div>
              </div>
            </div>

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