@extends('layouts/mainadmin')
@section('container')
<main>
    <div class="page-content">
        <div class="container-fluid">
            <div class="container">
                <h2>Tambah Artikel</h2>
                <form action="{{ route('simpanartikel') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label for="penulis">Nama Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Artikel</label>
                        <textarea class="form-control" id="isi" name="isi" rows="6" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control-file" id="gambar" name="gambar" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
