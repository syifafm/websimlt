@extends ('layout.main')

@section ('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h4>User Baru</h4>
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
                    <h2 class="card-title">Kelola Data User</h2>
                    <p class="card-description">
                    </p>
                    @if ( auth()->user()->status=="kalab" && auth()->user()->id=="1")
                    <a href="/registrasiaslab-create2" class="btn btn-outline-info btn-icon-text"><i class="ti-plus btn-icon-prepend"></i> Tambah User</a>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Foto
                                    </th>
                                    <th>
                                        Nama Lengkap
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Kontak
                                    </th>
                                    <th>
                                        Instansi/Prodi
                                    </th>
                                    <th>
                                        NIP/NIM
                                    </th>
                                    <th>
                                        Password
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
                                @forelse($user as $u)
                                <tr>
                                    <td class="py-1">
                                        {{ $loop -> iteration }}
                                    </td>
                                    <td>
                                        {{ $u-> foto }}
                                    </td>
                                    <td>
                                        {{ $u-> nama_lengkap }}
                                    </td>
                                    <td>
                                        {{ $u-> email }}
                                    </td>
                                    <td>
                                        {{ $u-> kontak }}
                                    </td>
                                    <td>
                                        {{ $u-> instansi_prodi }}
                                    </td>
                                    <td>
                                        {{ $u-> nip_nim }}
                                    </td>
                                    <td>
                                        {{ $u-> password }}
                                    </td>
                                    <td>
                                        {{ $u-> status }}
                                    </td>
                                    <td>
                                        <a href="/pinjamru/{{ $u->id }}" class="btn btn-success"><i class="ti-plus btn-icon-prepend"></i> Pinjam</a>
                                        <a href="/pengembalian/{{ $u->id }}" class="btn btn-secondary"><i class="ti-plus btn-icon-prepend"></i> Pengembalian</a>
                                    </td>
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