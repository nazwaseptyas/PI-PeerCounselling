@extends('layouts/main')
@section('container')
<main>
    <div class="blog-area pt-120 pb-90" style="font-family: 'Poppins', sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 mb-30">
                    <h2 style="margin-bottom: 50px; text-align:center;">Hasil Pencarian untuk: "{{ $keyword }}"</h2>
                    {{-- Artikel --}}
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
                        <p>Tidak ada hasil yang cocok dengan pencarian Anda.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
