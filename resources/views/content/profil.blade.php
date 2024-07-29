@extends('layout.header')

@section('content')

<!-- ======= Header Profil Section ======= -->
<section id="profil" class="profil">
    <div class="container">
        <div class="section-profil">
            <h2>PROFIL</h2>
        </div>
        <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/landingpage">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="">Tentang Kami</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profil</li>
                </ol>
            </nav>
    </div>
</section><!-- Header Profil Section -->

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container-fluid" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

          <div class="content">
            <h3><strong>Tentang Laboratorium</strong></h3>

            <p>
            Selain memiliki ruang belajar yang nyaman dan memadai, untuk mendukung perkuliahan yang berbasis praktek, 
            kami memiliki 4 laboratorium untuk proses pembelajaran praktikum. Adapun laboratorium yang kami miliki terdiri dari: 
            Laboratorium Komputer (Lab Kom), Laboratorium Studio Foto, Laboratorium Audio, dan Laboratorium Inovasi dan Game.</P>
            
            <P>
               Dengan spesifikasi peralatan laboratorium yang terbarukan, mahasiswa tidak akan tertinggal dalam pembelajaran praktek 
            agar dapat mengimplementasikan ilmu teoritis yang telah dipelajari di kelas. Banyak kegiatan yang dapat dan telah dilakukan 
            di laboratorium kami. Tidak hanya sebagai penunjang Tridharma Perguruan tinggi saja, laboratorium kami juga banyak dimanfaatkan 
            untuk kegiatan-kegiatan lainnya seperti: study club dan tim riset prodi, workshop dan seminar, Tempat Uji Kompetensi (TUK) dan 
            sertifikasi nasional/internasional, pelaksanaan ujian CAT baik dari dalam maupun luar kampus, dan masih banyak lagi kegiatan-kegiatan 
            lainnya yang terlaksana di laboratorium.
            </P>

            <p>
              Selain itu, perangkat-perangkat laboratorium kami juga banyak digunakan oleh pihak eksternal 
            kampus dalam menunjang kegiatan-kegiatan di luar yang melibatkan spesifikasi komputer yang tinggi. Hal ini sejalan dengan tekad dan 
            target kampus kami untuk menjadi kampus World Class University.
            </p>
            
            </p>
          </div>
        </div>

        <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" data-aos="zoom-in" data-aos-delay="150">
          <img src="{{asset('vendor/assets1/img/why-us.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>

    </div>
  </section><!-- End Why Us Section -->

<!-- ======= Content Profil Section ======= -->
<section id="konten" class="konten section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Visi</h2>
      <p>Menjadi Laboratorium terintegrasi yang unggul dalam riset dan pengembangan ilmu pengetahuan di bidang Pendidikan Multimedia untuk  menunjang industri kreatif nasional dan berwawasan global.</p>
    </div>
  </div>

  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Misi</h2>
      <p>Memberikan kontribusi dalam pengembangan ilmu pengetahuan di bidang Pendidikan Multimedia melalui kegiatan pendidikan, penelitian dan pengabdian kepada masyarakat, dengan berbasis kreativitas, intelektual, manajerial, strategi dan teknologi digital.</p>
    </div>
  </div>

</section>
<!-- End content profil Section -->



@endsection