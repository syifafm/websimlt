@extends ('layout.main')

@section ('content')
<div class="main-panel">
    <div class="content-wrapper">
        <h4>Dashboard</h4>
        <br>
        <br>
        <div class="text-center">
            <h3 class="font-weight-bold">Peminjaman Ruang dan Alat Laboratorium Pendidikan Multimedia</h3>
            <div class="row">

                <div class="col-md-12 grid-margin">
                    <div class="row">

                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        </div>

                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="justify-content-end d-flex">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pinjaman Section -->
        <div class="container">
            <div class="tabs">
                <button class="tab-button active">Semua</button>
                <button class="tab-button">Mahasiswa</button>
                <button class="tab-button">Dosen</button>
                <button class="tab-button">Lembaga</button>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="card-header">
                        <img src="{{ asset('images/eplanning.png') }}" alt="E-Planning">
                    </div>
                    <div class="card-body">
                        <h3>E-Planning</h3>
                        <p>E-Planning UPI</p>
                    </div>
                    @forelse($user as $u)
                    <div class="card-footer">
                        <a href="/pinjamru/{{ $u->id }}" class="link-btn">Pinjam</a>
                    </div>
                    @empty
                    <tr>Data Tidak Ada</tr>
                    @endforelse
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="{{ asset('images/evaluasi.png') }}" alt="Evaluasi PBM">
                    </div>
                    <div class="card-body">
                        <h3>Evaluasi PBM</h3>
                        <p>Aplikasi kuesioner untuk melakukan evaluasi mengajar dosen.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="link-btn">Tautan</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="{{ asset('images/spot.png') }}" alt="SPOT">
                    </div>
                    <div class="card-body">
                        <h3>SPOT</h3>
                        <p>Program aplikasi pembelajaran berbasis online bagi dosen dan mahasiswa UPI</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="link-btn">Tautan</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="{{ asset('images/kkn.png') }}" alt="KKN Tematik">
                    </div>
                    <div class="card-body">
                        <h3>KKN Tematik</h3>
                        <p>Aplikasi Kuliah Kerja Nyata (KKN) Online</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="link-btn">Tautan</a>
                    </div>
                </div>
            </div>
        </div>
        @endsection