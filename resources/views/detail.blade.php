@extends('layouts/main')
@section('container')
<main>
    {{-- Detail Artikel --}}
    <div><a href="/artikel" class="c-btn" style="width: 250px; margin-left: 75px; margin-top: 50px;">Kembali</a></div>
    <div class="blog-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 mb-30">
                    <div class="blog-wrapper blog-standard blog-details">
                        <div class="blog-d-img">
                            <img src="{{ asset('storage/' . $data->gambar) }}" alt="{{ $data->judul }}" />
                        </div>
                        <div class="blog-text">
                            <div class="blog-meta">
                                <span>
                                    <i class="far fa-calendar-alt"></i>
                                    {{ $data->tgl_artikel }}
                                </span>
                                <span>
                                    <i class="far fa-user"></i>
                                    {{ $data->penulis }}
                                </span>
                            </div>
                            <h4>
                                {{ $data->judul }}
                            </h4>
                            <p style="text-align: justify;">
                                {!! nl2br(e($data->isi)) !!}
                            </p>
                        </div>
                    </div>
                </div>
                {{-- Cari Artikel --}}
                <div class="col-xl-4 col-lg-4 mb-30">
                    <div class="widget mb-40">
                            <form action="{{ route('search') }}" method="GET" class="search-form">
                        <input type="text" name="q" placeholder="Cari Artikel">
                        <button type="submit" class="c-btn" style="height:40px; width: 30px; margin-right:10px;"><i class="fas fa-search"></i></button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
