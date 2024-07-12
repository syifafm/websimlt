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
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
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

<!-- ======= Cliens Section ======= -->
<section id="cliens" class="cliens section-bg">
  <div class="container">

    <div class="row" data-aos="zoom-in">

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{asset('vendor/assets1/img/clients/oculus-logo1.png')}}" class="img-fluid" style="width: 150px; height: 50px;" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{asset('vendor/assets1/img/clients/blender-logo.png')}}" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{asset('vendor/assets1/img/clients/unity-logo.png')}}" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{asset('vendor/assets1/img/clients/unreal-logo.png')}}" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{asset('vendor/assets1/img/clients/vslogo.png')}}" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{asset('vendor/assets1/img/clients/figma-logo.png')}}" class="img-fluid" alt="">
      </div>

    </div>

  </div>
</section><!-- End Cliens Section -->

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
          <h4><a href="">Pengajaran</a></h4>
          <p>Mendukung kegiatan belajar mengajar dengan memberikan fasilitas dan tutorial</p>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class='bx bx-chip'></i></div>
          <h4><a href="">Praktikum</a></h4>
          <p>Berkontribusi aktif dalam mengembangkan dan menyelenggarakan praktikum digital</p>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class='bx bx-building-house'></i></div>
          <h4><a href="">Ruangan</a></h4>
          <p>Peminjaman tempat / ruangan lab yang mendukung proses pembelajaran/praktik</p>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
        <div class="icon-box">
          <div class="icon"><i class='bx bxs-devices'></i></div>
          <h4><a href="">Alat-Alat Lab</a></h4>
          <p>Peminjaman alat-alat lab yang mendukung proses pembelajaran</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us section-bg">
  <div class="container-fluid" data-aos="fade-up">

    <div class="row">

      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

        <div class="content">
          <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
          </p>
        </div>

        <div class="accordion-list">
          <ul>
            <li>
              <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li>
              <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li>
              <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>

      <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" data-aos="zoom-in" data-aos-delay="150">
        <img src="{{asset('vendor/assets1/img/why-us.png')}}" class="img-fluid animated" alt=""></div>
    </div>

  </div>
</section><!-- End Why Us Section -->

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
  <div class="container" data-aos="zoom-in">

    <div class="row">
      <div class="col-lg-9 text-center text-lg-start">
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col-lg-3 cta-btn-container text-center">
        <a class="cta-btn align-middle" href="#">Kunjungi Situs</a>
      </div>
    </div>

  </div>
</section><!-- End Cta Section -->

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Pricing</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="box">
          <h3>Free Plan</h3>
          <h4><sup>$</sup>0<span>per month</span></h4>
          <ul>
            <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
            <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
            <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
            <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
            <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
          </ul>
          <a href="#" class="buy-btn">Get Started</a>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
        <div class="box featured">
          <h3>Business Plan</h3>
          <h4><sup>$</sup>29<span>per month</span></h4>
          <ul>
            <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
            <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
            <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
            <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
            <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
          </ul>
          <a href="#" class="buy-btn">Get Started</a>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
        <div class="box">
          <h3>Developer Plan</h3>
          <h4><sup>$</sup>49<span>per month</span></h4>
          <ul>
            <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
            <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
            <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
            <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
            <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
          </ul>
          <a href="#" class="buy-btn">Get Started</a>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Pricing Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Team</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">

      <div class="col-lg-6">
        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
          <div class="pic"><img src="{{asset('vendor/assets1/img/team/team-1.jpg')}}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
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
            <h4>Sarah Jhonson</h4>
            <span>Product Manager</span>
            <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
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
        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
          <div class="pic"><img src="{{asset('vendor/assets1/img/team/team-3.jpg')}}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>William Anderson</h4>
            <span>CTO</span>
            <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
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
            <h4>Amanda Jepson</h4>
            <span>Accountant</span>
            <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
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
      <li data-filter=".filter-app">Kegiatan Dosen</li>
      <li data-filter=".filter-card">Kegiatan Mahasiswa</li>
      <li data-filter=".filter-web">Kegiatan Prodi</li>
    </ul>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-img"><img src="{{asset('vendor/assets1/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
          <h4>App 1</h4>
          <p>App</p>
          <a href="{{asset('vendor/assets1/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-img"><img src="{{asset('vendor/assets1/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
          <h4>Web 3</h4>
          <p>Web</p>
          <a href="{{asset('vendor/assets1/img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-img"><img src="{{asset('vendor/assets1/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
          <h4>App 2</h4>
          <p>App</p>
          <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
          <h4>Card 2</h4>
          <p>Card</p>
          <a href="{{asset('vendor/assets1/img/portfolio/portfolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-img"><img src="{{asset('vendor/assets1/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
          <h4>Web 2</h4>
          <p>Web</p>
          <a href="{{asset('vendor/assets1/img/portfolio/portfolio-5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
          <h4>App 3</h4>
          <p>App</p>
          <a href="{{asset('vendor/assets1/img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-img"><img src="{{asset('vendor/assets1/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
          <h4>Card 1</h4>
          <p>Card</p>
          <a href="{{asset('vendor/assets1/img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-img"><img src="{{asset('vendor/assets1/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
          <h4>Card 3</h4>
          <p>Card</p>
          <a href="{{asset('vendor/assets1/img/portfolio/portfolio-8.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-img"><img src="{{asset('vendor/assets1/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
          <h4>Web 3</h4>
          <p>Web</p>
          <a href="{{asset('vendor/assets1/img/portfolio/portfolio-9.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
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
      <p>Berikut adalah pertanyaan yang sering muncul terkait Sistem Informasi Manajemen Laboratorium Terintegrasi (SIM-LT).</p>
    </div>

    <div class="faq-list">
      <ul>
        <li data-aos="fade-up" data-aos-delay="100">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Apa itu SIM-LT? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="200">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Apa keunggulan SIM-LT? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="300">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="400">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="500">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
            <p>
              Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
            </p>
          </div>
        </li>

      </ul>
    </div>

  </div>
</section><!-- End Frequently Asked Questions Section -->

@endsection