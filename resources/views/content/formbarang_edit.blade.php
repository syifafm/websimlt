@extends ('layout.main')

@section ('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Data Barang/Alat Lab Multimedia</h4>
                        <p class="card-description">
                            Silakan mengisi dan lengkapi form dibawah ini!
                        </p>
                        <form action="/formbarang-update" method="post" class="forms-sample">
                        @method('put')
                        @csrf
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $barang-> id }}" >
                            <div class="form-group">
                                <label for="namaru">Nama Ruangan</label>
                                <select class="form-control" id="namaru" name="nama_ruang" value="{{ $barang->nama_ruang }}" placeholder="Ruangan">
                                    <option>Lab Komputer</option>
                                    <option>Lab Audio</option>
                                    <option>Lab Foto dan Videografi</option>
                                    <option>Lab Inovasi dan Game</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kode">Kode Jenis Barang</label>
                                <input type="text" class="form-control" id="kode" name="kode_jenis_barang" value="{{ $barang->kode_jenis_barang }}" placeholder="Contoh: 12345678">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="{{ $barang->nama }}" placeholder="Contoh: Kamera mirrorless">
                            </div>
                            <div class="form-group">
                                <label for="tipe">Tipe Barang</label>
                                <input type="text" class="form-control" id="tipe" name="tipe" value="{{ $barang->tipe }}" placeholder="Contoh: Canon">
                            </div>
                            <div class="form-group">
                                <label for="tahun">tahun Peroleh</label>
                                <input type="text" class="form-control" id="tahun" name="tahun_peroleh" value="{{ $barang->tahun_peroleh }}" placeholder="Contoh: 2018">
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah barangg</label>
                                <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{ $barang->jumlah }}" placeholder="Contoh: 8">
                            </div>
                            <div class="form-group">
                                <label for="satuan">Satuan</label>
                                <input type="text" class="form-control" id="satuan" name="satuan" value="{{ $barang->satuan }}" placeholder="Contoh: Unit">
                            </div>
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection