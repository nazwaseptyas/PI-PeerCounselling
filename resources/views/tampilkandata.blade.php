@extends('layouts/mainadmin')

@section('container')
<main>
    <div class="page-content">
        <div class="container-fluid">
            <div class="container">
                <h2>Edit Artikel</h2>
                <form action="{{ route('tampilkandata', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{ $data->judul }}" required>
                    </div>
                    <div class="form-group">
                        <label for="penulis">Nama Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" value="{{ $data->penulis }}" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $data->tanggal }}" required>
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Artikel</label>
                        <textarea class="form-control" id="isi" name="isi" rows="6" required>{{ $data->isi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control-file" id="gambar" name="gambar" accept="image/*">
                        <p class="text-muted">Kosongkan jika tidak ingin mengubah gambar</p>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
