@extends ('layout.main')

@section ('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Pengembalian</h4>
                        <p class="card-description">
                            Silakan mengisi dan lengkapi form dibawah ini!
                        </p>
                        <form action="/formpengembalian-store/{{ $user->first()->id }}" method="post" class="forms-sample">
                            @csrf
                            <div class="form-group">
                            <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ $user->first()->id }}" placeholder="Nama">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama_lengkap" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for="inspro">Instansi/prodi</label>
                                <input type="text" class="form-control" id="inspro" name="instansi_prodi" placeholder="Instansi">
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal Pinjaman</label>
                                <input type="text" class="form-control" id="tanggal" name="tanggal_pinjam" placeholder="Tanggal Pinjaman">
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal Pengembalian</label>
                                <input type="text" class="form-control" id="tanggal" name="tanggal_pengembalian" placeholder="Tanggal Pengembalian">
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
                                    <label for="formFile" class="form-label">Upload Bukti Pengembalian</label>
                                    <input class="form-control" type="file" id="formFile" name="uplod_bukti_pengembalian">
                            </div>
                    </div>
                    <div class="form-group">
                                <input type="hidden" class="form-control" id="st" name="status" value="dikembalikan">
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