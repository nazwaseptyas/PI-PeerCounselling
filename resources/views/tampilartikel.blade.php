<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yuk Cerita</title>
    <link rel="shortcut icon" href="/assets/img/logo/logoyukcerita.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/form.css"/>
</head>
<body>
<main>
    <div class="page-content" style="font-family: 'Poppins', sans-serif;">
        <div class="container-fluid">
            <div class="container">
                <h2 style="font-size: 36px; font-weight:bolder; margin-top: 50px; text-align:center;">Edit Artikel</h2>
                <form action="{{ route('updateartikel', ['id' => $data->id_artikel]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Judul</label>
                        <input type="text" name="judul" value="{{ $data->judul }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Penulis</label>
                        <input type="text" name="penulis" value="{{ $data->penulis }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                        <input type="date" name="tgl_artikel" value="{{ $data->tgl_artikel }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="keluhan" class="form-label">Isi Artikel</label>
                        <textarea name="isi" class="form-control" rows="6">{{ $data->isi }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar" value="{{ $data->gambar }}"class="form-control" id="gambar" aria-describedby="emailHelp">
                    </div>
                    <br>
                    <div style="margin-top: 10px;">
                        <label class="form-label">Gambar Saat Ini</label>
                        <img src="{{ asset('storage/' . $data->gambar) }}" alt="{{ $data->judul }}" style="max-width: 100px;">
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-bottom: 50px; border:none; margin-right:10px;">Edit</button>
                    <a href="/tabelartikel" class="btn btn-primary" style="margin-bottom: 50px; border:none; background-color:red;">Batal</a>
                </form> 
            </div>
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>