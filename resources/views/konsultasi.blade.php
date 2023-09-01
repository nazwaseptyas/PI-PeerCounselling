@extends('layouts/main')
@section('container')
<main>
    <div class="contact-us-area pt-120 pb-120">
        {{-- Data Konsultasi --}}
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6">
                <div class="section-title text-center mb-60">
                    <span>
                         Konsultasi Sekarang
                    </span>
                    <br>
                    <br>
                    <div class="app-item">
                        <ul>
                            <li>
                                <div class="app-text">
                                    <h4>Senin - Jum'at</h4>
                                        <span>9:00 - 17:00 WIB</span>
                                </div>
                            </li>
                            <li>
                                <div class="app-text">
                                    <h4>Sabtu &amp; Minggu</h4>
                                    <span>10:00 - 16:00 WIB</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div>
                    <h2 style="font-size: 16px; font-family:'Poppins',sans-serif; line-height: 1.5;">Jika sudah mendaftar konsultasi, silakan cek data konsultasi anda sekarang juga dan mulailah konsultasi.&nbsp;<i class="fa-solid fa-hand-sparkles" style="color: #36b65e;"></i></h2><br>
                    <li>
                      <a href="/konfirm" class="c-btn" style="margin-bottom: 30px;">Mulai Konsultasi</a>
                    </li>
                    {{-- <h2 style="font-size: 16px; font-family:'Poppins',sans-serif; line-height: 1.5;">Jika belum mendaftar konsultasi, silakan daftar sekarang juga pada form di bawah ini. Silahkan scroll kebawah ya.&nbsp;<i class="fa-solid fa-hand-sparkles" style="color: #36b65e;"></i></h2><br>
                    <li>
                      <a href="https://wa.me/6287771030559?text=Hi%2C%20admin%20yukcerita%21%20Saya%20ingin%20melakukan%20konsultasi%20dengan%20konselor%20Nadjilah%20Fatin%2C%20S.Psi.%20Sesuai%20dengan%20jadwal%20yang%20saya%20daftarkan%20ya%2C%20terima%20kasih%20min%21" class="c-btn" style="margin-bottom: 30px;">Mulai Konsultasi Melalui Whatsapp</a>
                    </li> --}}
                </div>
                </div>
            </div>
        </div>   
        <br><br>
        {{-- Alert Berhasil Input Data Konsultasi --}}
        <div class="col-xl-6 col-lg-6 d-flex justify-content-center">
            @if ($message = Session::get('success'))
            <div class="alert alert-success shadow" role="alert" style="border-left:#36b65e 5px solid; border-radius: 10px; width:500px;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="True" style="color:#36b65e">&times;</span>
                </button>
                <div class="row">
                    <p style="font-size: 14px; font-family:'Poppins',sans-serif;" class="mb-0 font-weight-light"><i class="fal fa-check-circle" style="color: #36b65e"></i><b class="mr-1">&nbsp;Success!</b>Data Konsultasi Berhasil Ditambahkan, Silahkan Cek Data Anda! Untuk Mulai Konsultasi Silahkan Hubungi Melalui Whatsapp Yang Tertera Diatas.</p>
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
                        Form Konsultasi Online
                            <br />
                        </span>
                        <h2 style="font-size: 18px; font-family:'Poppins',sans-serif;line-height: 1.5;">Daftar untuk melakukan konsultasi sesuai dengan tanggal konsultasi yang anda inginkan.</h2>
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
                                        <label>Nama Lengkap :</label>
                                        <input name="nama" type="text" placeholder="Masukkan Nama" required/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="contacts-icon contactss-email">
                                        <label>Email :</label>
                                        <input name="email_konsultasi" type="email" placeholder="Masukkan Email" required/>
                                    </div>
                                </div>
                               <div class="col-lg-6 col-md-12">
                                    <label for="date">Pilih Tanggal Konsultasi:</label>
                                    <div class="contacts-icon contactss-date">
                                        <input id="date" name="tanggal" type="date" class="custom-date-input" style="font-size: 14px" required/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="contacts-icon contactss-phone">
                                        <label>Nomor Whatsapp :</label>
                                        <input name="nohp" type="text" placeholder="Masukkan Nomor Whatsapp" required/>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contacts-icon contactss-address">
                                        <label>Alamat :</label>
                                        <input name="alamat" type="text" placeholder="Masukkan Alamat" required/>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contacts-icon contactss-message">
                                        <label>Tulis Keluhan Anda :</label>
                                        <textarea name="keluhan" id="comments" cols="30" rows="10"
                                            placeholder="Keluhan Anda" required></textarea>
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
