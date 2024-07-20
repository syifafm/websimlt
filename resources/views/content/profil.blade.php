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
                    <li class="breadcrumb-item"><a href="#">Tentang Kami</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profil</li>
                </ol>
            </nav>
    </div>
</section><!-- Header Profil Section -->


<!-- ======= Content Profil Section ======= -->
<section id="pricing" class="pricing section-bg">
    <div class="container" data-aos="fade-up">

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



@endsection