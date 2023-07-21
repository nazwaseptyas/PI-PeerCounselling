@extends('layouts/mainadmin')

@section('container')
<body>
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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">No. Handphone</th>
                                    <th scope="col">Keluhan</th>
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
                                    <td>{{ $row->nama}}</td>
                                    <td>{{ $row->email}}</td>
                                    <td>{{ $row->alamat}}</td>
                                    <td>{{ $row->tanggal}}</td>
                                    <td>{{ $row->nohp}}</td>
                                    <td>{{ $row->keluhan}}</td>
                                    <td>{{ $row->created_at->format('D M Y') }}</td>
                                    <td>
                                        <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                                        <a href="/delete/{{ $row->id }}"  class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
@endsection
