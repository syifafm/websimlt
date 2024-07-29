@extends('layout.header')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" style="background-color: #343BB0;">

  <div class="container" style="background-color: #343BB0;">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Laboratorium Pendidikan Multimedia</h1>
        <h2>Selamat datang pada Sistem Informasi Manajemen Laboratorium Terintegrasi (SIM-LT)</h2>
        <div class="d-flex justify-content-center justify-content-lg-start">
          <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="{{asset('vendor/assets1/img/hero-img.png')}}" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>layanan Kami</h2>
        <p>SIM-LT ini merupakan sarana pendukung yang bersifat sangat strategis dalam pelaksanaan sistem pendidikan, khususnya di lingkungan Program Studi Pendidikan Multimedia.</p>
      </div>

      <div class="row">
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class='bx bxs-pencil'></i></div>
            <h4><a >Pengajaran & Praktikum</a></h4>
            <p>Mendukung kegiatan belajar mengajar dengan memberikan fasilitas dan tutorial</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class='bx bx-chip'></i></div>
            <h4><a >Riset Laboratorium</a></h4>
            <p>Berkontribusi aktif dalam mengembangkan dan menyelenggarakan praktikum digital</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class='bx bx-building-house'></i></div>
            <h4><a >Ruangan</a></h4>
            <p>Peminjaman tempat / ruangan lab yang mendukung proses pembelajaran/praktik</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class='bx bxs-devices'></i></div>
            <h4><a >Alat-Alat Lab</a></h4>
            <p>Peminjaman alat-alat lab yang mendukung proses pembelajaran</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->


  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="row">
        <div class="col-lg-9 text-center text-lg-start">
          <h3>Mengenal Pendidikan Multimedia</h3>
          <p> Pendidikan Multimedia merupakan program studi yang menggabungkan aspek pendidikan dan teknologi multimedia, sehingga lulusannya memiliki keahlian yang dapat diaplikasikan dalam konteks pendidikan modern yang semakin bergantung pada teknologi dan multimedia untuk proses pembelajaran.</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="#">Kunjungi Situs</a>
        </div>
      </div>

    </div>
  </section><!-- End Cta Section -->

  <!-- ======= Counts section ======= -->
  <section id="wrapper" class="wrapper">
    <div class="container">
      <i class="bi bi-person-fill"></i>
      <span class="num" data-val="2">2</span>
      <span class="text">Laboran</span>
    </div>

    <div class="container">
        <i class="bi bi-person"></i>
        <span class="num" data-val="4">4</span>
        <span class="text">Asisten Lab</span>
    </div>

    <div class="container">
        <i class="ri-community-line"></i>
        <span class="num" data-val="4">4</span>
        <span class="text">Ruang Lab</span>
    </div>

    <div class="container">
        <i class="ri-computer-line"></i>
        <span class="num" data-val="74">74</span>
        <span class="text">Peralatan Lab</span>
    </div>

  </section>


  <!-- ======= Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Team</h2>
        <p>Berikut adalah anggota Laboratorium Pendidikan Multimedia meliputi kepala laboran beserta Asisten Laboratorium.</p>
      </div>

      <div class="row">

        <div class="col-lg-6">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="pic"><img src="{{asset('vendor/assets1/img/team/team-1.jpg')}}" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Nurhidayatulloh, S.pd, M.T.</h4>
              <span>Kepala Laboratorium</span>
              <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
            <div class="pic"><img src="{{asset('vendor/assets1/img/team/team-2.jpg')}}" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Kurniawan Kaka Dwi Sukardi</h4>
              <span>Asisten Laboratorium</span>
              <p>NIM 2306284</p>
              <p>Email: </p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
            <div class="pic"><img src="{{asset('vendor/assets1/img/team/team-3.jpg')}}" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Ravi Hindami Juzaili</h4>
              <span>Asisten Laboratorium</span>
              <p>NIM 2304701</p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
            <div class="pic"><img src="{{asset('vendor/assets1/img/team/team-4.jpg')}}" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Oby Satia Tegaran</h4>
              <span>Asistem Laboratorium</span>
              <p>NIM 2209139</p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Team Section -->


  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Galeri Kegiatan</h2>
        <p>Berbagai kegiatan telah dilakukan, berikut adalah galeri dokumentasi dari berbagai kegiatan program studi, dosen, maupun mahasiswa.</p>
      </div>

      <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-dosen">Kegiatan Dosen</li>
        <li data-filter=".filter-mahasiswa">Kegiatan Mahasiswa</li>
        <li data-filter=".filter-prodi">Kegiatan Prodi</li>
      </ul>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-dosen">
          <div class="portfolio-img">
            <img src="{{asset('vendor/assets1/img/portfolio/perkuliahan.jpeg')}}" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <h4>Kegiatan Dosen</h4>
            <p>Microteaching</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-prodi">
          <div class="portfolio-img">
            <img src="{{asset('vendor/assets1/img/portfolio/pelatihan.jpeg')}}" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <h4>Kegiatan Prodi</h4>
            <p>Pelatihan</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-dosen">
          <div class="portfolio-img">
            <img src="{{asset('vendor/assets1/img/portfolio/demo-vr.jpeg')}}" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <h4>Kegiatan Dosen</h4>
            <p>Demo VR</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-mahasiswa">
          <div class="portfolio-img">
            <img src="{{asset('vendor/assets1/img/portfolio/kuliah-labkom.jpeg')}}" class="img-fluid" alt="">
        </div>
          <div class="portfolio-info">
            <h4>Kegiatan Mahasiswa</h4>
            <p>Perkuliahan</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-prodi">
          <div class="portfolio-img">
            <img src="{{asset('vendor/assets1/img/portfolio/pengunjung.jpeg')}}" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <h4>Kegiatan Prodi</h4>
            <p>Pameran</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-dosen">
          <div class="portfolio-img">
            <img src="{{asset('vendor/assets1/img/portfolio/VR.jpeg')}}" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <h4>Kegiatan Dosen</h4>
            <p>Virtual Reality</p>
            
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-mahasiswa">
          <div class="portfolio-img">
            <img src="{{asset('vendor/assets1/img/portfolio/praktik.jpeg')}}" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <h4>Kegiatan Mahasiswa</h4>
            <p>perkuliahan Fotografi</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-mahasiswa">
          <div class="portfolio-img">
            <img src="{{asset('vendor/assets1/img/portfolio/fotografii.jpeg')}}" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <h4>Kegiatan Mahasiswa</h4>
            <p>Praktik Fotografi</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-prodi">
          <div class="portfolio-img">
            <img src="{{asset('vendor/assets1/img/portfolio/sempropo.jpeg')}}" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <h4>Kegiatan Prodi</h4>
            <p>Seminar Proposal</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- <-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Frequently Asked Questions</h2>
        <p>Punya pertanyaan? Lihat bagian Pertanyaan yang Sering Diajukan (FAQ) kami untuk mendapatkan jawaban cepat atas pertanyaan umum. Jika tidak menemukan jawaban yang dicari, jangan ragu untuk menghubungi kami untuk bantuan lebih lanjut.</p>
      </div>

      <div class="faq-list">
        <ul>
          <li data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Apa itu SIM-LT? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
              <p>
                Sistem Informasi Manajemen Laboratorium Terintegrasi adalah sebuah sistem yang digunakan untuk pengelola data-data yang ada pada Laboratorium. Serta digunakan untuk peminjaman barang dan ruang laboratorium oleh mahasiswa.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Apa keunggulan SIM-LT? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Pengelolaan data peminjaman di laboratorium Pendidikan Multimedia menjadi lebih efisien dan terjangkau melalui penerapan Sistem Informasi Manajemen Laboratorium Terintegrasi (SIMLT) berbasis web.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">bagaimana cara melakukan peminjaman di SIMLT? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Untuk mahasiswa yang ingin melakukan peminjaman barang / lab di SIMLT dapat dilakukan dengan Login (bagian atas) lalu masukan email dan password. Jika belum mempunyai akun mahasiswa melakukan Registrasi terlebih dahulu. Setelah masuk ke dalam SIMLT, pergi ke menu Peminjaman, pilih kategori peminjaman dan isi form yang dibutuhkan.
              </p>
            </div>
          </li>

        </ul>
      </div>

    </div>
  </section><!-- End Frequently Asked Questions Section -->

  @endsection