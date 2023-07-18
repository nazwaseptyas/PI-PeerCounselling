@extends('layouts/main')

@section('container')

<body>
    <main>
        <div class="breadcrumb-area pt-150 pb-150" data-overlay="7"
            style="background-image: url(assets/img/bg/kontak.jpeg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-text text-center z-index">
                            <h1>contact</h1>
                            <ul class="breadcrumb-menu">
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <span>
                                        <a href="/kontak">Contact</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-us-area">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="conatct-address-wrapper theme-gray  mb-30">
                            <div class="contact-address-icon f-left">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="contact-address-text fix">
                                <span>Phone Number</span>
                                <h3>+62 8777 1030 559</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="conatct-address-wrapper theme-bg mails mb-30">
                            <div class="contact-address-icon f-left">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="contact-address-text fix">
                                <span>Email Address</span>
                                <h3>nazwaseptyas@gmail.com</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="conatct-address-wrapper red-bg mpas mb-30">
                            <div class="contact-address-icon f-left">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-address-text fix">
                                <span>Officce Address</span>
                                <h3>Depok, Jawa Barat</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>
@endsection