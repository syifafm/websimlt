@extends ('layout.main')

@section ('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h4>Barang/alat Lab</h4>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="justify-content-end d-flex">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Daftar Barang/Alat Ruang Laboratorium</h2>
                    <p class="card-description">
                    </p>
                    <a href="/formbarang-create" class="btn btn-outline-info btn-icon-text">
                        <i class="ti-plus btn-icon-prepend"></i>Tambah data
                    </a>
                    
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Nama <br> Ruang
                                    </th>
                                    <th>
                                        Kode <br> Jenis Barang
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Tipe
                                    </th>
                                    <th>
                                        Tahun <br> Peroleh
                                    </th>
                                    <th>
                                        Jumlah
                                    </th>
                                    <th>
                                        Satuan
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($barang as $b)
                                <tr>
                                    <td class="py-1">
                                        {{ $loop->iteration}}.
                                    </td>
                                    <td>
                                        {{ $b-> nama_ruang }}
                                    </td>
                                    <td>
                                        {{ $b-> kode_jenis_barang }}
                                    </td>
                                    <td>
                                        {{ $b-> nama }}
                                    </td>
                                    <td>
                                        {{ $b-> tipe }}
                                    </td>
                                    <td>
                                        {{ $b-> tahun_peroleh }}
                                    </td>
                                    <td>
                                        {{ $b-> jumlah }}
                                    </td>
                                    <td>
                                        {{ $b-> satuan }}
                                    </td>
                                    <td>
                                        <a href="/formbarang-edit/{{ $b->id }}" class="btn btn-secondary">
                                            <i class="ti-plus btn-icon-prepend"></i>Edit
                                        </a>
                                        <a href="/formbarang-destroy/{{ $b->id }}" class="btn btn-danger">
                                            <i class="ti-plus btn-icon-prepend"></i>Hapus
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                      Data Barang Belum Tersedia.
                                  </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @endsection