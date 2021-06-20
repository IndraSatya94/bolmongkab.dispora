<!DOCTYPE html>
<html lang="en">

  <head>
  @include('dispora.layout.head')
  </head>
  
  <body>
  
 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top ">
 @include('dispora.layout.header')

</header><!-- End Header -->

  <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Agenda</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Agenda</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= agenda Section ======= -->
        <section id="agenda" class="agenda">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-12">

                        <div class="agenda-detail table-responsive">
                            <h3 class="agenda-title">DETAIL AGENDA :</h3>
                            <div class="agenda-item recent-posts">
                                <table class="table table-bordered table-striped">
                                    <thead class="table-primary">
                                        <tr>
                                            <th scope="col">Acara:</th>
                                            <th scope="col">Tempat:</th>
                                            <th scope="col">Tanggal:</th>
                                            <th scope="col">Mulai:</th>
                                            <th scope="col">Selesai:</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $agenda->acara }}</td>
                                            <td>{{ $agenda->tempat }}</td>
                                            <td>{{ $agenda->tanggal }}</td>
                                            <td>{{ $agenda->mulai }}</td>
                                            <td>{{ $agenda->selesai }}</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div><!-- End agenda recent posts-->

                        </div><!-- End agenda -->
                    </div><!-- End agenda agenda -->
                </div>
            </div>
        </section><!-- End berita detail Section -->

  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <section id="footer" className="text-center">
 @include('dispora.layout.footer')
</section>

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
@include('dispora.layout.script')

</body>

</html>