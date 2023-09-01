@extends('layouts/main')
@section('container')
<body>
    <main>
        {{-- BreadCrumb --}}
        <div class="breadcrumb-area pt-150 pb-150" data-overlay="7"
            style="background-image: url(assets/img/bg/kontak.jpeg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-text text-center z-index">
                            <h1>Kontak</h1>
                            <ul class="breadcrumb-menu">
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <span>
                                        <a href="/kontak">Kontak</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Kontak --}}
        <div class="contact-us-area">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="conatct-address-wrapper theme-gray  mb-30">
                            <div class="contact-address-icon f-left">
                                <a href="https://api.whatsapp.com/send?phone=6287771030559&text=Hi%2C%20admin%20YukCerita%21%20Aku%20butuh%20bantuan%2C%20aku%20mau%20bertanya%20mengenai..." target="_blank">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            </div>
                            <div class="contact-address-text fix">
                                <span>Nomor Whatsapp</span>
                                <a href="https://api.whatsapp.com/send?phone=6287771030559&text=Hi%2C%20admin%20YukCerita%21%20Aku%20butuh%20bantuan%2C%20aku%20mau%20bertanya%20mengenai..." target="_blank">
                                <h3>+62 8777 1030 559</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="conatct-address-wrapper theme-bg mails mb-30">
                            <div class="contact-address-icon f-left">
                                <a href="mailto:nazwaseptyas@gmail.com">
                                    <i class="fal fa-envelope"></i>
                                </a>
                            </div>
                            <div class="contact-address-text fix">
                                <span>Email</span>
                                <a href="mailto:nazwaseptyas@gmail.com">
                                     <h3>nazwaseptyas@gmail.com</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="conatct-address-wrapper red-bg mpas mb-30">
                            <div class="contact-address-icon f-left">
                                <a href="https://www.google.com/maps?q=Depok,+Jawa+Barat" target="_blank">
                                    <i class="fal fa-map-marker-alt"></i>
                                </a>
                            </div>
                            <div class="contact-address-text fix">
                                <span>Alamat</span>
                                <a href="https://www.google.com/maps?q=Depok,+Jawa+Barat" target="_blank">
                                   <h3>Depok, Jawa Barat</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
@endsection