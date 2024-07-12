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
                    <button type="button" class="btn btn-outline-info btn-icon-text">
                        <i class="ti-plus btn-icon-prepend"></i>
                        <a href="/registrasiaslab-create2">Tambah User</a>
                    </button>
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
                                        <button type="button" class="btn btn-success">Setujui</button>
                                        <button type="button" class="btn btn-danger">Tolak</button>
                                        <button type="button" class="btn btn-secondary">
                                            <a class="ti-plus btn-icon-prepend" href="/pinjamru/{{ $u->id }}">Pinjam</a>
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                   Data Tidak Ada 
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @endsection