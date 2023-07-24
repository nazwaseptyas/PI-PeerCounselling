@extends('layouts/main')
@section('container')
<main>
    <div class="contact-us-area pt-120 pb-120">
        {{-- Alert Berhasil Input Data Konsultasi --}}
        <div class="col-xl-6 col-lg-6 d-flex justify-content-center">
            @if ($message = Session::get('success'))
            <div class="alert alert-success shadow" role="alert" style="border-left:#36b65e 5px solid; border-radius: 10px; width:500px;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="True" style="color:#36b65e">&times;</span>
                </button>
                <div class="row">
                    <p style="font-size: 14px; font-family:'Poppins',sans-serif;" class="mb-0 font-weight-light"><i class="fal fa-check-circle" style="color: #36b65e"></i><b class="mr-1">&nbsp;Success!</b>Data Konsultasi Berhasil Ditambahkan, Silahkan Cek Data Anda! Untuk Konsultasi akan kami hubungi melalui Whatsapp.</p>
                </div>
            </div>
            @endif
        </div>
        {{-- Form Konsultasi --}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="section-title text-center mb-60">
                        <span>
                            <i class="far fa-plus"></i> Konsultasi Sekarang
                            <i class="far fa-plus pl-10"></i>
                            <br />
                        </span>
                        <h2 style="font-size: 36px;">Form Konsultasi Online</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="contacts-us-wrapper theme-green">
                        <form id="contacts-us-form" class="contacts-us-form" action="{{ route('createdata') }}" method="post" enctype="multipart/form-data">
                        <form id="contacts-us-form" class="contacts-us-form" action="/konfirm" method="post" enctype="multipart/form-data">
                        
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="contacts-icon contactss-name">
                                        <input name="nama" type="text" placeholder="Masukkan Nama" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="contacts-icon contactss-email">
                                        <input name="email" type="email" placeholder="Masukkan Email" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="contacts-icon contactss-date">
                                        <input id="date" name="tanggal" type="date" class="custom-date-input"
                                            style="font-size: 14px" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="contacts-icon contactss-phone">
                                        <input name="nohp" type="text" placeholder="Masukkan Nomor Whatsapp" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contacts-icon contactss-address">
                                        <input name="alamat" type="text" placeholder="Masukkan Alamat" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contacts-icon contactss-message">
                                        <textarea name="keluhan" id="comments" cols="30" rows="10"
                                            placeholder="Keluhan Anda"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <div class="contacts-us-form-button text-center">
                                            <button type="submit" class="c-btn">Kirim</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Data Konsultasi --}}
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6">
            <div class="section-title text-center mb-60">
                <span>
                    <i class="far fa-plus"></i> Data Konsultasi
                     <i class="far fa-plus pl-10"></i>
                </span>
                <br>
                <h2 style="font-size: 24px; font-family:'Poppins',sans-serif;">Cek Data Anda Apabila Sudah Mendaftar Konsultasi</h2>
                <br>
                <div class="app-item">
                    <ul>
                        <li>
                            <div class="app-text">
                                <h4>Senin - Jum'at</h4>
                                    <span>9:00 - 17:00</span>
                            </div>
                        </li>
                        <li>
                            <div class="app-text">
                                <h4>Sabtu &amp; Minggu</h4>
                                <span>10:00 - 16:00</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <li>
                <a href="/konfirm" class="c-btn" style="margin-bottom: 30px;">Lihat Data Konsultasi</a>
            </li>
        </div>
    </div>               
</main>
@endsection
