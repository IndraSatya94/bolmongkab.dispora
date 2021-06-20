<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

<a href="index.html" class="logo d-flex align-items-center">
  <img src="assets/img/logobolmong.png" alt="">
  <span>DISPORA</span>
</a>

<nav id="navbar" class="navbar">
  <ul>
    <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{ ('/') }}">Beranda</a></li>
    <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
        <li class="{{ (request()->is('v-tugasfungsi')) ? 'active' : '' }}"><a href="{{ ('/v-tugasfungsi') }}">Tugas dan Fungsi</a></li>
        <li class="{{ (request()->is('v-struktur')) ? 'active' : '' }}"><a href="{{ ('/v-struktur') }}">Struktur Organisasi</a></li>
        <li class="{{ (request()->is('v-visimisi')) ? 'active' : '' }}"><a href="{{ ('/v-visimisi') }}">Visi dan Misi</a></li>
      </ul>
    </li>
    <li class="{{ (request()->is('v-berita')) ? 'active' : '' }}"><a href="{{ ('/v-berita') }}">Berita</a></li>
    <li class="{{ (request()->is('v-agenda')) ? 'active' : '' }}"><a href="{{ ('/v-agenda') }}">agenda</a></li>
    <li class="dropdown"><a href="#"><span>Akuntabilitas</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
        <li class="{{ (request()->is('v-download')) ? 'active' : '' }}"><a href="{{ ('/v-download') }}">Dokumen Informasi Publik</a></li>
      </ul>
    </li>
    <li class="{{ (request()->is('v-galeri')) ? 'active' : '' }}"><a href="{{ ('/v-galeri') }}">Galeri</a></li>
    <li class="{{ (request()->is('v-kontak')) ? 'active' : '' }}"><a href="{{ ('/v-kontak') }}">Kontak</a></li>
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->

</div>