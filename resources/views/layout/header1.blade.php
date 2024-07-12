<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>SIMLT</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/assets2/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{asset('vendor/assets2/assets/css/fontawesome.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/assets2/assets/css/templatemo-scholar.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/assets2/assets/css/owl.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/assets2/assets/css/animate.css')}}">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css')}}" />

</head>


<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky" style="background-color: aquamarine;">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav" style="background-color: aquamarine;">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <h1>SIMLT</h1>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Serach Start ***** -->
            <div class="search-input">
              <form id="search" action="#">
                <input type="text" placeholder="Ketik Sesuatu" id='searchText' name="searchKeyword" onkeypress="handle" />
                <i class="fa fa-search"></i>
              </form>
            </div>
            <!-- ***** Serach Start ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
              <li class="scroll-to-section"><a href="#services">Layanan</a></li>
              <li class="dropdown"><a href="#"><span>Laboratorium </span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                  </svg></a>
                <ul>
                  <li> <a href="#">Lab Komputer</a></li>
                  <li> <a href="#">Lab Audio</a></li>
                </ul>
                </li>
              <li class="scroll-to-section"><a href="#portfolio">Galeri Kegiatan</a></li>
              <li class="scroll-to-section"><a href="#contact">Kontak</a></li>
              <li class="scroll-to-section"><a href="#question">FAQ</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  @yield('content')

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 SIMLT. All rights reserved. &nbsp;&nbsp;&nbsp;</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/assets2/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/assets2/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('vendor/assets2/assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('vendor/assets2/assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('vendor/assets2/assets/js/counter.js')}}"></script>
  <script src="{{asset('vendor/assets2/assets/js/custom.js')}}"></script>

</body>

</html>