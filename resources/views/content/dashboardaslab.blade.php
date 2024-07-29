@extends ('layout.main')

@section ('content')
<div class="main-panel">
    <div class="content-wrapper">
    <h4>Dashboard</h4>
        <br>
        <br>
        <div class="text-center">
            <h3 class="font-weight-bold">SISTEM INFORMASI LAB TERINTEGRASI</h3>
            <h6 class="font-weight-normal mb-0">Selamat Datang</h6>
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


        <br>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Jadwal Peminjaman</h2>
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
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        @endsection