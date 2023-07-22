@extends('layouts/main')

@section('container')
<main>
    <div class="contact-us-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="section-title text-center mb-60">
                        <h2 style="font-size: 36px;">Data Konsultasi</h2>
                    </div>
                </div>
            </div>
            <div class="page-content">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 mb-30" style="margin-bottom: 50px;">
                                <form action="{{ route('searchcon') }}" method="GET" class="search-form">
                                    <input type="text" name="q" placeholder="Cari Data Anda">
                                    <button type="submit" class="c-btn" style="height:40px; width: 30px; margin-right:10px; "><i class="fas fa-search"></i></button>
                                </form>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tanggal Konsultasi</th>
                                    <th scope="col">Di Buat</th>
                                    <th scope="col">Konselor</th>
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
                                    <td>{{ $row->tanggal}}</td>
                                    <td>{{ $row->created_at->format('D M Y') }}</td>
                                    <td>Nadjilah Fatin, S.Psi.</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="contacts-us-form-button text-center" style="margin-top: 40px;">
                        <a href="{{ route('konsultasi') }}" class="c-btn">Kembali ke Form Konsultasi</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    </main>
            
</main>
@endsection
