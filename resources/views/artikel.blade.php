@extends('layouts/main')

@section('container')

<main>
    <div class="blog-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 mb-30">
                    @php
                        if (empty($data)) {
                            dd("Variabel \$data kosong atau tidak terdefinisi!");
                        }
                    @endphp
                    @if ($data && $data->count() > 0)
                    @foreach ($data as $row)
                    <div class="blog-wrapper blog-standard mb-50">
                        <div class="blog-img">
                            <a href="{{ route('detail', $row->id) }}">
                                <img src="{{ asset('storage/' . $row->gambar) }}" alt="{{ $row->judul }}" />
                            </a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-meta">
                                <span>
                                    <i class="far fa-calendar-alt"></i>
                                    <a href="{{ route('detail', $row->id) }}">{{ $row->tanggal }}</a>
                                </span>
                                <span>
                                    <i class="far fa-user"></i>
                                    <a href="{{ route('detail', $row->id) }}">{{ $row->penulis }}</a>
                                </span>
                            </div>
                            <h4>
                                <a href="{{ route('detail', $row->id) }}">
                                    {{ $row->judul }}
                                </a>
                            </h4>
                            <p>
                                {{ \Illuminate\Support\Str::limit($row->isi, 200) }}
                            </p>
                             <a href="{{ route('detail', $row->id) }}" class="c-btn gray-btn">Selengkapnya</a>
                        </div>
                    </div>
                    @endforeach
                    @else
                        <p>Tidak ada data artikel yang ditampilkan.</p>
                    @endif
                </div>
                <div class="col-xl-4 col-lg-4 mb-30">
                    <div class="widget mb-40">
                        <form class="search-form">
                            <input type="text" placeholder="Cari" />
                            <button type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="widget mb-40">
                        <h3 class="widget-title">Kategori</h3>
                        <ul class="service-list">
                            <li>
                                <a href="/detail">Semua Kategori</a>
                            </li>
                            <li>
                                <a href="/detail">Industri dan Organisasi</a>
                            </li>
                            <li>
                                <a href="/detail">Karir</a>
                            </li>
                            <li>
                                <a href="/detail">Keluarga</a>
                            </li>
                            <li>
                                <a href="/detail">Masalah Diri</a>
                            </li>
                            <li>
                                <a href="/detail">Trauma</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
