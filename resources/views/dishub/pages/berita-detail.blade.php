<!DOCTYPE html>
<html lang="en">

<head>

    @include('dishub.pages.layout.head')

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">

        @include('dishub.pages.layout.header')

    </header><!-- End Header -->


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Beria Detail</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="berita.html">Berita</a></li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= berita detail Section ======= -->
        <section id="berita" class="berita">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-detail">

                            <div class="entry-img">
                                <img src="/image/berita/{{$beritas->image}}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                {{$beritas->judul}}
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="#">{{$beritas->user->name}}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="#"><time>{{$beritas->created_at}}</time></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    <?php
                    $kalimat = $beritas->konten;
                    echo substr($kalimat,1,300);
                    echo "<br>";
                    echo "<br>";
                    echo substr($kalimat,301,600);
                    echo "<br>";
                    echo "<br>";
                    echo substr($kalimat,601,900);
                    echo "<br>";
                    echo "<br>";
                    echo substr($kalimat,601,900);
                    ?>
                                </p>

                            </div>

                            <div class="entry-footer">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">{{$beritas->kategori->nama}}</a></li>
                                </ul>

                                <!-- <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <li><a href="#">Umum</a></li>
                                </ul>
                            </div> -->

                        </article><!-- End berita entry -->

                    </div><!-- End berita entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Cari</h3>
                            <div class="sidebar-item search-form">
                                <form action="{{ ('/berita-cari') }}" method="GET">
                                    <input type="search" name="cari" value="{{ request()->get('cari') }}">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Kategori</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                @foreach($kategori as $k)
                                    <li><a href="#">{{$k->nama}} <span>-</span></a></li>
                                @endforeach
                                </ul>
                            </div><!-- End sidebar categories-->

                            <h3 class="sidebar-title">Lainnya</h3>
                            <div class="sidebar-item recent-posts">
                            @foreach($sidebar as $side)
                                <div class="post-item clearfix">
                                    <img src="/image/berita/{{$side->image}}" alt="">
                                    <h4><a href="{{ route('v-berita-detail',$side->id) }}">{{$side->judul}}</a>
                                    </h4>
                                    <time datetime="2020-01-01">{{$side->created_at}}</time>
                                </div>
                            @endforeach
                            </div><!-- End sidebar recent posts-->

                            <!-- <h3 class="sidebar-title">Tags</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><a href="#">Umum</a></li>
                                    <li><a href="#">Khusus</a></li>
                                </ul>
                            </div> -->

                        </div><!-- End sidebar -->

                    </div><!-- End berita sidebar -->

                </div>

            </div>
        </section><!-- End berita detail Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <section id="footer" className="text-center">


        <div className="container">
            <div className="row">
                <div className="col-md-12 col-sm-6 col-xs-12">
                    <p>Dinas Perhubungan Kabupaten Bolaang Mongondow</p>
                    <p className="copyright-text">Copyright &copy; 2021 by <a href="#"> E-Government</a> Diskominfo</p>
                </div>
            </div>
        </div>

    </section>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('dishub.pages.layout.script')

</body>

</html>
