@extends('layouts/mainadmin')
@section('container')
<body>
    <main>
        <div class="page-content">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        {{-- Alert --}}
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $message }}
                        </div>
                        @endif
                        {{-- Tabel Konsultasi --}}
                        <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">No. Whatsapp</th>
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
                                    <td>{{ $row->email_konsultasi}}</td>
                                    <td>{{ $row->alamat}}</td>
                                    <td>{{ $row->tanggal}}</td>
                                    <td>{{ $row->nohp}}</td>
                                    <td>{{ $row->keluhan}}</td>
                                    <td>{{ $row->created_at->format('D M Y') }}</td>
                                    <td>
                                        <a href="/tampilkandata/{{ $row->id_konsultasis }}" class="btn btn-info">Edit</a>
                                        <a href="/delete-consultation/{{ $row->id_konsultasis }}"  class="btn btn-danger">Delete</a>
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
    {{-- Fungsi Delete --}}
    <script>
    function deleteConsultation(id) {
        if (confirm('Apakah Anda yakin ingin menghapus data konsultasi ini?')) {
            fetch(`/delete-consultation/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }).then(response => {
                if (response.ok) {
                    // Refresh halaman setelah berhasil menghapus data
                    window.location.reload();
                } else {
                    alert('Gagal menghapus data konsultasi.');
                }
            }).catch(error => {
                console.error('Terjadi kesalahan:', error);
                alert('Terjadi kesalahan saat menghapus data konsultasi.');
            });
        }
    }
</script>
</body>
@endsection
