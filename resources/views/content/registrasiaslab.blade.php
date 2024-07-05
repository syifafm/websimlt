<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SIMLT</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('vendor/asset/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/asset/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/asset/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('vendor/asset/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('vendor/asset/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('vendor/asset/images/logo.svg')}}" alt="logo">
              </div>
  
              <h4>Input Akun Aslab</h4>
      
              <h6 class="font-weight-light">Silahkan mengisi data</h6>
              <form action="/registrasiaslab-store2" method="post" class="pt-3">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="nama_lengkap" id="exampleInputUsername1" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="nip_nim" id="exampleInputEmail1" placeholder="NIP/NIM">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="instansi_prodi" id="exampleInputEmail1" placeholder="Instansi/Prodi">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="kontak" id="exampleInputEmail1" placeholder="Kontak">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="exampleInputEmail1" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="foto" id="exampleInputEmail1" placeholder="Foto">
                </div>

                <div class="form-group">
                  <input type="hidden" class="form-control form-control-lg" name="status" id="exampleInputEmail1" placeholder="Status" value="aslab">
                </div>

                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button type="submit"><a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</a></button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.html" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
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