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
          <h2>Dokumen</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Dokumen</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="dokumen" class="dokumen">
      <div class="container">

        <section id="download" class="download">
          <div class="container">
              <div class="judul">
                  <h2>DOKUMEN INFORMASI PUBLIK</h2>
                  <hr>
              </div>
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama File</th>
                          <th scope="col">Link Download</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($download as $down)
                      <tr>
                          <th scope="row">{{ ++$i }}</th>
                          <td>{{$down->nama}}</td>
                          <td><a class="btn btn-primary" href="{{ route('getdownload',$down->id) }}">Download</i></a>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </section><!-- End detail Section -->

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