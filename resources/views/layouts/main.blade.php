<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Yuk Cerita</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/logo/logoyukcerita.png" />
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="/assets/css/meanmenu.css" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/css/responsive.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
</head>
<body>
    {{-- Navbar --}}
    <header>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3">
                    <div class="logo">
                        <a href="/">
                            <img src="{{asset('assets/img/logo/yukceritalogo.png')}}" alt="logo" style="width: 200px" />
                        </a>
                    </div>
                </div>
                <br>
                <div class="col-xl-6 col-lg-6">
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li>
                                    <a href="/">Beranda</a>
                                </li>
                                <li>
                                    <a href="/about">Tentang Kami</a>
                                </li>
                                <li>
                                    <a href="/konsultasi">Konsultasi</a>
                                </li>
                                <li>
                                    <a href="/artikel">Artikel</a>
                                </li>
                                {{-- <li>
                                    <a href="/video">Video</a>
                                </li> --}}
                                <li>
                                    <a href="/kontak">Kontak</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                {{-- Login, Register, Logout --}}
                <div class="col-xl-3 col-lg-3">
                    @if(Auth::check())
                    <div class="dropdown d-inline-block ms-auto">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="margin-left: 90px;">
                            <img src="{{asset('assets/img/icon/user.svg')}}" alt="User Icon"
                                style="margin-right: 10px; width:20px;" />
                            Halo, {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="/logout" style="color: #36b65e;">Keluar</a>
                            </li>
                        </ul>
                    </div>
                    @else
                    <div class="header-right">
                        <div class="header-button f-right">
                            <a href="/login" class="c-btn">Masuk</a>
                        </div>
                        <div class="header-button f-right">
                            <a href="/register" class="c-btn">Daftar</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
    </header>
    {{-- Main Content --}}
    <main>@yield('container')</main>
    {{-- Footer --}}
    <footer class="footer-style footer-04-style">
        <div class="footer-top-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                        <div class="footer-wrapper">
                            <div class="footer-logo">
                                <a href="/">
                                    <img src="{{asset('assets/img/logo/yukceritalogo.png')}}" alt="" />
                                </a>
                            </div>
                            <div class="footer-text">
                                <p style="text-align: justify;">
                                    YukCerita adalah sebuah website konseling sebaya yang ditujukan untuk membantu
                                    mahasiswa dalam mengatasi masalah pribadi, akademik, dan sosial.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                        <div class="footer-wrapper ml-15">
                            <h3 class="footer-title">Fitur</h3>
                            <div class="footer-link">
                                <ul>
                                    <li>
                                        <a href="/">Beranda</a>
                                    </li>
                                    <li>
                                        <a href="/about">Tentang Kami</a>
                                    </li>
                                    <li>
                                        <a href="/konsultasi">Konsultasi</a>
                                    </li>
                                    <li>
                                        <a href="/artikel">Artikel</a>
                                    </li>
                                    {{-- <li>
                                        <a href="/video">Video</a>
                                    </li> --}}
                                    <li>
                                        <a href="/kontak">Kontak</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                        <div class="footer-wrapper">
                            <h3 class="footer-title">Kontak Kami</h3>
                            <ul class="footer-address">
                                <li>
                                    <div class="footer-address-icon f-left">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="footer-address-text">
                                        <span>Depok, Jawa Barat</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon f-left">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="footer-address-text">
                                        <span>
                                            +62 8777 1030 559
                                            <br />
                                        </span>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon f-left">
                                        <i class="fal fa-envelope-open"></i>
                                    </div>
                                    <div class="footer-address-text">
                                        <span>
                                            nazwaseptyas@gmail.com
                                            <br />
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                        <h3 class="footer-title">Ikuti Kami</h3>
                        <div class="mb-50">
                            <a href="/konsultasi" class="c-btn" style="color: #ffffff">
                                Konsultasi Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div
            style="margin: 20px; padding: 20px; background-color: #FF9F9F; border-radius: 18px; display: flex; justify-content: space-between;">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="exclamation-circle"
                class="svg-inline--fa fa-exclamation-circle fa-3x section5-fa" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 24px; height: 24px;">
                <path fill="currentColor"
                    d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zm-248 50c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z">
                </path>
            </svg>
            <span style="margin-left: 10px; font-size: 13px;text-align: justify;">
                Yuk Cerita adalah platform yang fokus pada dukungan dan konseling sebaya. Kami siap membantu Anda dalam
                mengatasi berbagai masalah dan memberikan dukungan emosional. Untuk situasi darurat dan membutuhkan
                bantuan segera terkait dengan percobaan bunuh diri dan bullying, harap hubungi layanan profesional yang bisa
                dijangkau segera yang tersedia di wilayah anda.
            </span>
        </div>
        </div>
        <div class="footer-botm-area pt-25 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="copyright">
                            <p>
                                Copyright <i class="far fa-copyright"></i> 2023 Yuk
                                Cerita.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="footer-btom-icon text-md-right">
                            <a href="https://api.whatsapp.com/send?phone=6287771030559&text=Hi%2C%20admin%20YukCerita%21%20Aku%20butuh%20bantuan%2C%20aku%20mau%20bertanya%20mengenai..." target="_blank">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="https://twitter.com/nzwasalsa_">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="/">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/nazwaseptyas/">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/jquery.scrollUp.min.js"></script>
    <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/assets/js/jquery.meanmenu.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.appear.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>
</html>