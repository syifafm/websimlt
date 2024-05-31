@extends ('layout.main')

@section ('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h4>Data Pinjaman</h4>
                        <br>
                    </div>
                </div>
            </div>
        </div>


        <br>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Pinjaman Saya</h2>
                    <button type="button" class="btn btn-outline-info btn-icon-text">
                        <i class="ti-plus btn-icon-prepend"></i>
                        Tambah pinjaman
                    </button>
                    <p class="card-description">
                    </p>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Id
                                    </th>
                                    <th>
                                        Username
                                    </th>
                                    <th>
                                        Peminjaman
                                    </th>
                                    <th>
                                        Jam Mulai
                                    </th>
                                    <th>
                                        Jam Berakhir
                                    </th>
                                    <th>
                                        Tanggal
                                    </th>
                                    <th>
                                        Keterangan
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
                                <tr>
                                    <td class="py-1">
                                        12345
                                    </td>
                                    <td>
                                        syifau
                                    </td>
                                    <td>
                                        Lab Komputer
                                    </td>
                                    <td>
                                        07.00
                                    </td>
                                    <td>
                                        09.00
                                    </td>
                                    <td>
                                        20-05-2024
                                    </td>
                                    <td>
                                        Praktikum matkul Desweb
                                    </td>
                                    <td>
                                        <label class="badge badge-warning">Diajukan</label>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                selebihnya
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                                                <h6 class="dropdown-item">Lihat</h6>
                                                <a class="dropdown-item" href="#">Copy</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endsection