@extends ('layout.main')

@section ('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Peminjaman</h4>
                        <p class="card-description">
                            Silakan mengisi dan lengkapi form dibawah ini!
                        </p>
                        <form action="/formpeminjaman-store" method="post" class="forms-sample">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama_lengkap" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for="inspro">Instansi/prodi</label>
                                <input type="text" class="form-control" id="inspro" name="instansi_prodi" placeholder="Instansi">
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal Kegiatan</label>
                                <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Kegiatan">
                            </div>
                            <div class="form-group">
                                <label for="wm">Waktu Mulai</label>
                                <input type="text" class="form-control" id="wm" name="jam_mulai" placeholder="Waktu Mulai">
                            </div>
                            <div class="form-group">
                                <label for="ws">Waktu Selesai</label>
                                <input type="text" class="form-control" id="ws" name="jam_selesai" placeholder="Waktu Selesai">
                            </div>
                            <div class="form-group">
                                <label for="jp">Jenis Peminjaman</label>
                                <select class="form-control" id="jp" name="jenis_pinjaman">
                                    <option>Ruang</option>
                                    <option>Alat</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ra">Ruang/Alat</label>
                                <select class="form-control" id="ra" name="ruang_alat">
                                    <option>Ruang Labkom</option>
                                    <option>Kamera</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Upload KTM/KTP</label>
                                    <input class="form-control" type="file" id="formFile" name="uplod_ktp_ktm">
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="dk">Deskripsi Kegiatan</label>
                        <textarea class="form-control" id="dk" name="deskripsi_kegiatan" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                                <input type="hidden" class="form-control" id="st" name="status" value="diajukan">
                            </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                   
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection