@extends ('layout.main')

@section ('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h4>Peminjaman Ruang</h4>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="justify-content-end d-flex">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card text-center">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ruang Lab Komputer</h5>
                        <p class="card-text">Gedung Biru</p>
                        <a href="#" class="btn btn-primary">Pinjam</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ruang Lab Audio</h5>
                        <p class="card-text">Gedung Biru</p>
                        <a href="#" class="btn btn-primary">Pinjam</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ruang Lab Foto dan Video</h5>
                        <p class="card-text">Gedung Biru</p>
                        <a href="#" class="btn btn-primary">Pinjam</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        @endsection