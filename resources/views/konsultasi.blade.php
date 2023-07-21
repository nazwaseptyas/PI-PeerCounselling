@extends('layouts/main')

@section('container')
<main>
    <div class="contact-us-area pt-120 pb-120">
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
                                        <input name="nohp" type="text" placeholder="Masukkan Nomor Telepon" />
                                    </div>
                                </div>
                                {{-- <div class="col-lg-12">
                                    <div class="contacts-icon contactss-doctor">
                                        <input name="doctor" type="text" placeholder="Nama Dokter"
                                            value="Psikolog Nadjilah Fatin" readonly style="font-size: 14px" />
                                    </div>
                                </div> --}}

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
</main>
@endsection
