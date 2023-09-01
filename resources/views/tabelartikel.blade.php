@extends('layouts/mainadmin')

@section('container')
<main>
    <div class="page-content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Tabel Artikel</h4>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                    @endif
                    <div><a href="{{ route('tambahartikel') }}" class="btn btn-primary mb-3">Tambah Artikel</a></div>
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Nama Penulis</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Isi Artikel</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Di Buat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php 
                            $no = 1;
                            @endphp
                            @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $no++}}</th>
                                <td>
                                  <a href="{{ route('detail', $row->id_artikel) }}">
                                      {{ $row->judul }}
                                  </a>
                              </td>
                                <td>{{ $row->penulis}}</td>
                                <td>{{ $row->tgl_artikel}}</td>
                                <td style="text-align: justify;">{{ $row->isi}}</td>
                                <td>
                                    <img src="{{ 'storage/' . $row->gambar }}" alt="{{ $row->judul }}" style="max-width: 100px;">
                                </td>
                                <td>{{ $row->created_at->format('D M Y') }}</td>
                                <td>
                                    <a href="/tampilkanartikel/{{ $row->id_artikel }}" class="btn btn-info">Edit</a>
                                    <a href="/delete-article/{{ $row->id_artikel }}"  class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>


@endsection
