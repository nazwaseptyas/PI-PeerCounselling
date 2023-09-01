@extends('layouts/main')
@section('container')
<main>
    <div class="blog-area pt-120 pb-90">
        <div class="container">
            {{-- Isi Artikel --}}
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
                            <a href="{{ route('detail', $row->id_artikel) }}">
                                <img src="{{ 'storage/' . $row->gambar }}" alt="{{ $row->judul }}" />
                            </a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-meta" style="text-align: justify;">
                                <span>
                                    <i class="far fa-calendar-alt"></i>
                                    <a href="{{ route('detail', $row->id_artikel) }}">{{ $row->tgl_artikel }}</a>
                                </span>
                                <span>
                                    <i class="far fa-user"></i>
                                    <a href="{{ route('detail', $row->id_artikel) }}">{{ $row->penulis }}</a>
                                </span>
                            </div>
                            <h4>
                                <a href="{{ route('detail', $row->id_artikel) }}">
                                    {{ $row->judul }}
                                </a>
                            </h4>
                            <p style="text-align: justify;">
                                {{ \Illuminate\Support\Str::limit($row->isi, 200) }}
                            </p>
                             <a href="{{ route('detail', $row->id_artikel) }}" class="c-btn gray-btn">Selengkapnya</a>
                        </div>
                    </div>
                    @endforeach
                    {{-- Pagination --}}
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="basic-pagination mt-20 basic-pagination-2">
                                    <ul>
                                        @if ($data->onFirstPage())
                                            <li class="disabled"><a href="#"><i class="far fa-angle-left"></i></a></li>
                                        @else
                                            <li><a href="{{ $data->previousPageUrl() }}"><i class="far fa-angle-left"></i></a></li>
                                        @endif

                                        @foreach ($data as $page)
                                            @if ($page->url)
                                                <li class="{{ $page->isActive ? 'active' : '' }}"><a href="{{ $page->url }}">{{ $page->label }}</a></li>
                                            @else
                                                <li class="disabled">{{ $page->label }}</li>
                                            @endif
                                        @endforeach

                                        @if ($data->hasMorePages())
                                            <li><a href="{{ $data->nextPageUrl() }}"><i class="far fa-angle-right"></i></a></li>
                                        @else
                                            <li class="disabled"><a href="#"><i class="far fa-angle-right"></i></a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @else
                        <p>Tidak ada data artikel yang ditampilkan.</p>
                    @endif
                </div>
               {{-- Cari Artikel --}}
                <div class="col-xl-4 col-lg-4 mb-30">
                    <div class="widget mb-40">
                        <form action="{{ route('search') }}" method="GET" class="search-form">
                            <input type="text" name="q" placeholder="Cari artikel">
                            <button type="submit" class="c-btn" style="height:40px; width: 30px; margin-right:10px;"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
