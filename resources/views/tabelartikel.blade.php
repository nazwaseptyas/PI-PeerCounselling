@extends('layouts/mainadmin')

@section('container')
<main>
    <div class="page-content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                    @endif
                    <a href="{{ route('tambahartikel') }}" class="btn btn-primary mb-3">Tambah Artikel</a>
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
                                  <a href="{{ route('detail', $row->id) }}">
                                      {{ $row->judul }}
                                  </a>
                              </td>
                                <td>{{ $row->penulis}}</td>
                                <td>{{ $row->tanggal}}</td>
                                <td>{{ $row->isi}}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $row->gambar) }}" alt="{{ $row->judul }}" style="max-width: 100px;">
                                </td>
                                <td>{{ $row->created_at->format('D M Y') }}</td>
                                <td>
                                    <a href="/tampilkanartikel/{{ $row->id }}" class="btn btn-info">Edit</a>
                                    <a href="/delete-article/{{ $row->id }}"  class="btn btn-danger">Delete</a>
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
</main>


@endsection
