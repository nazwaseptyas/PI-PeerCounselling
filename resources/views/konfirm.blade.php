@extends('layouts/main')
@section('container')
<main>
    <div class="contact-us-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="section-title text-center mb-60">
                        <span>
                            Data Konsultasi
                        </span>
                    </div>
                </div>
            </div>
            {{-- List Data Konsultasi --}}
            <div class="page-content">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            @php
                            $no = 1;
                            @endphp
                            @if (count($data) > 0)
                            @foreach ($data as $row)
                            <div class="col-xl-4 col-lg-4 mb-30">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $row->nama }}</h5>
                                        <p class="card-text">{{ $row->tanggal }}</p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" style="background-color:#36b65e; color:white; border:none;" data-target="#modal{{ $row->id_konsultasis}}">
                                            Lihat Selengkapnya
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="modal{{ $row->id_konsultasis }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ $row->nama }} - Data Konsultasi</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Tanggal Konsultasi: {{ \Carbon\Carbon::parse($row->tanggal)->isoFormat('dddd, D MMMM Y') }}</p>
                                            <p>Email: {{ $row->email_konsultasi }}</p>
                                            <p>Nomor WhatsApp: {{ $row->nohp }}</p>
                                            <p>Alamat: {{ $row->alamat }}</p>
                                            <p>Tanggal Pendaftaran: {{ $row->created_at->translatedFormat('l, j F Y') }}</p>
                                            <p>Konselor: Nadjilah Fatin, S.Psi.</p>
                                            <hr>
                                            <p style="text-align: justify;">Anda dapat memulai konsultasi melalui WhatsApp untuk konfirmasi jadwal dengan admin dan memulai sesi konsultasi dengan konselor.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                            <a href="https://wa.me/6287771030559?text=Hi%2C%20admin%20yukcerita%21%20Saya%20ingin%20melakukan%20konsultasi%20dengan%20konselor%20Nadjilah%20Fatin%2C%20S.Psi.%20Sesuai%20dengan%20jadwal%20yang%20saya%20daftarkan%20ya%2C%20terima%20kasih%20min%21" class="btn btn-primary" style="background-color:#36b65e; color:white; border:none;"target="_blank">Mulai Konsultasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                                <div class="col-12 text-center">
                                    <p>Anda belum melakukan daftar konsultasi.</p>
                                </div>
                            @endif
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
@endsection
