<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SIM-LT</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('vendor/asset/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/asset/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/asset/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('vendor/asset/css/vertical-layout-light/stylles.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('vendor/asset/images/pmm.png')}}" />
</head>

<body>
<div class="login-container">
        <div class="row" style="background-color: #f4f4f4;">
            <div class="col-md-6 p-0">
                <div class="left-side">
                    <img src="{{ asset('vendor/asset/images/auth/bg-ciblue.jpeg') }}" alt="campus" style="width:2000px;height:700px;" class="img-fluid">
                </div>
                <div class="logo-container">
                <img src="{{ asset('vendor/asset/images/logo_upikita.png') }}" alt="logo1" class="logo">
                <img src="{{ asset('vendor/asset/images/logoverti_pmm.png') }}" alt="logo2" class="logo">
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="login-box">
                    <a href="/landingpage" class="back-link">&larr; Kembali</a>
                    <h4 style="text-align: left;">Masuk</h4>
                    <p style="text-align: left;">Silakan masukan Email dan kata sandi yang terdaftar</p>
                    <form action="{{route('postlogin')}}" method="post">
                    {{ csrf_field() }} 
                        <div class="form-group">
                        <input type="email" class="form-control form-control-lg"  name="email" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                        <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                        <i class="bi bi-eye-slash"></i>
                    </div>
                        <button type="submit" class="btn btn-block">Masuk</button>
                        <div class="text-center mt-4 font-weight-light">
                            Tidak punya akun? <a class="text-primary" href="/registrasi-create"><strong>Buat akun</strong></a> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('vendor/asset/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('vendor/asset/js/off-canvas.js')}}"></script>
  <script src="{{asset('vendor/asset/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('vendor/asset/js/template.js')}}"></script>
  <script src="{{asset('vendor/asset/js/settings.js')}}"></script>
  <script src="{{asset('vendor/asset/js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>
