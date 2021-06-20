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

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Visi dan Misi</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Visi dan Misi</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="dokumen" class="dokumen">
      @foreach($visimisi as $vmisi)
      <div class="container">

        <h2>VISI DAN MISI</h2>
        <p>
          {{$vmisi->body}}
        </p>

  </div>
  @endforeach
    </section><!-- End Services Section -->

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