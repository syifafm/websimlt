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
                    <h2 class="card-title">Request Peminjaman</h2>
                    <p class="card-description">

                    </p>
                    <button type="button" class="btn btn-outline-info btn-icon-text">
                        <a class="ti-plus btn-icon-prepend" href="/formpeminjaman-create/{{ $user->first()->id }}">Tambah pinjaman</a>

                    </button>
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
                                        Tanggal
                                    </th>
                                    <th>
                                        Jam Mulai
                                    </th>
                                    <th>
                                        Jam Selesai
                                    </th>
                                    <th>
                                        Jenis Pinjaman
                                    </th>
                                    <th>
                                        Ruang/Alat yang Dipinjam
                                    </th>
                                    <th>
                                        Upload KTM/KTP
                                    </th>
                                    <th>
                                        Deskripsi Kegiatan
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($pinjam as $p)
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
                                        {{ $p->tanggal}}
                                    </td>
                                    <td>
                                        {{ $p->jam_mulai}}
                                    </td>
                                    <td>
                                        {{ $p->jam_selesai}}
                                    </td>
                                    <td>
                                        {{ $p->jenis_pinjaman}}
                                    </td>
                                    <td>
                                        {{ $p->ruang_alat}}
                                    </td>
                                    <td>
                                        {{ $p->uplod_ktp_ktm}}
                                    </td>
                                    <td>
                                        {{ $p->deskripsi_kegiatan}}
                                    </td>
                                    <td>
                                        {{ $p->status}}
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success">Setuju</button>
                                        <button type="button" class="btn btn-danger">Tolak</button>
                                        <button type="button" class="btn btn-secondary">
                                            <a class="ti-plus btn-icon-prepend" href="/formpeminjaman-edit/{{ $p->id }}">Perbarui</a>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <a class="ti-plus btn-icon-prepend" href="/formpeminjaman-delete/{{ $p->id }}">Batalkan</a>
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>Data Tidak Ada</tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        @endsection