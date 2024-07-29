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


        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Request Pengembalian</h2>
                    <p class="card-description">

                    </p>
                    <a href="/formpengembalian-create/{{ $user->first()->id }}" class="btn btn-outline-info btn-icon-text">
                        <i class="ti-plus btn-icon-prepend"></i>Pengembalian</a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>

                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Nama Lengkap
                                    </th>
                                    <th>
                                        Instansi/Prodi
                                    </th>
                                    <th>
                                        Tanggal Pinjam
                                    </th>
                                    <th>
                                        Tanggal Pengembalian
                                    </th>
                                    <th>
                                        jenis Pinjaman
                                    </th>
                                    <th>
                                        Ruang/Alat yang Dipinjam
                                    </th>
                                    <th>
                                        Upload Bukti Pengembalian
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($pengembalian as $p)
                                <tr>
                                    <td class="py-1">
                                        {{ $loop->iteration}}.
                                    </td>
                                    <td>
                                        {{ $p->nama_lengkap}}
                                    </td>
                                    <td>
                                        {{ $p->instansi_prodi}}
                                    </td>
                                    <td>
                                        {{ $p->tanggal_pinjam}}
                                    </td>
                                    <td>
                                        {{ $p->tanggal_pengembalian}}
                                    </td>
                                    <td>
                                        {{ $p->jenis_pinjaman}}
                                    </td>
                                    <td>
                                        {{ $p->ruang_alat}}
                                    </td>
                                    <td>
                                        {{ $p->uplod_bukti_pengembalian}}
                                    </td>
                                    <td><label class="badge badge-success">{{ $p->status}}</label></td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                      Data Belum Tersedia.
                                  </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        @endsection