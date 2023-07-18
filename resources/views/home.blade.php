@extends('layouts/main')

@section('container')

<body>
    <main>
        <section class="hero-area pos-rel mr-30 ml-30">
            <div class="slider-icon d-none d-xl-block">
                <a href="/kontak">
                    <i class="fal fa-comments"></i>
                </a>
            </div>
            <div class="slider-side d-none d-xl-block">
                <a href="/konsultasi" class="c-btn">
                    <span></span> Gratis Konsultasi
                </a>
            </div>
            <div class="hero-slider" style="background-image: url('/assets/img/slider/peercounseling.png');">
                <div class="slider-active">
                    <div class="single-slider slider-height d-flex align-items-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7 col-md-9">
                                    <div class="hero-content">
                                        <div class="slider-caption ">
                                            <span data-animation="fadeInUp" data-delay=".2s">
                                                Mind Care & Stay Happy
                                            </span>
                                            <h2 data-animation="fadeInUp" data-delay=".4s">
                                                Yuk Cerita
                                            </h2>
                                            <p data-animation="fadeInUp" data-delay=".6s">
                                                YukCerita adalah sebuah website konseling sebaya yang ditujukan untuk
                                                membantu mahasiswa dalam mengatasi masalah pribadi, akademik, dan
                                                sosial.
                                            </p>
                                        </div>
                                        <div class="slider-btn">
                                            <a href="/konsultasi" data-animation="fadeInUp" data-delay=".8s"
                                                class="c-btn">
                                                Konsultasi sekarang
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- number-area-start -->
        <div class="number-area pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6"></div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="number-wrapper mb-30 nm-01 ">
                            <div class="number-info f-left">
                                <span>01</span>
                            </div>
                            <div class="number-text">
                                <h3>Peer Counselling</h3>
                                <p># Website Peer Counselling untuk Mahasiswa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- faq-area-end -->
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-60">
                    <span>Kenapa harus di Yuk Cerita? </span>
                </div>
            </div>
        </div>
        <br />
        <br />
        <div class="feature-area feature-area-top pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box text-center mb-30">
                            <div class="fea-padd">
                                <div class="feature-icon mb-25">
                                    <i class="flaticon-brain"></i>
                                </div>
                                <div class="feature-content">
                                    <h3 class="fea-title">Nyaman</h3>
                                    <p>
                                        Anda dapat bercerita dengan nyaman, masalah apapun akan kami dengar dan dapat
                                        memberikan solusi yang terbaik.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box text-center mb-30">
                            <div class="fea-padd">
                                <div class="feature-icon mb-25">
                                    <i class="flaticon-life"></i>
                                </div>
                                <div class="feature-content">
                                    <h3 class="fea-title">Sehat mental</h3>
                                    <p>
                                        YukCerita menyediakan artikel dan konseling dengan teman sebaya untuk
                                        meningkatkan
                                        kesehatan mental pada mahasiswa.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box text-center mb-30">
                            <div class="fea-padd">
                                <div class="feature-icon mb-25">
                                    <i class="flaticon-depression"></i>
                                </div>
                                <div class="feature-content">
                                    <h3 class="fea-title">Tuangkan isi hati pada ahli</h3>
                                    <p>
                                        Kamu dapat melakukan konsultasi dengan konseling sebaya yang sudah dilatih oleh
                                        psikolog professional.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box text-center mb-30">
                        <div class="fea-padd">
                            <div class="feature-icon mb-25">
                                <i class="flaticon-depression"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="fea-title">Dapat bercerita kapan saja</h3>
                                <p>
                                    Kamu dapat menghubungi konselor kapanpun melalui chat. Semua pasti bisa!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box text-center mb-30">
                        <div class="fea-padd">
                            <div class="feature-icon mb-25">
                                <i class="flaticon-life"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="fea-title">Kerahasiaan Terjamin</h3>
                                <p>
                                    Cerita dan data mu akan hanya akan digunakan untuk keperluan konseling.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <br />
        <br />
        <div class="cta-area pb-110 pt-120" style="background-image: url('assets/img/bg/mhs1.jpeg')">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-xl-8 col-lg-8 col-md-8">
                        <div class="section-title section-title-white mr-30 mb-40">
                            <span class="white-color">
                                Jaga kesehatan mentalmu sebagai prioritas utama, Kemudian berikan yang terbaik dalam
                                setiap
                                tugas dan tanggung jawabmu.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-area pb-110 pt-120">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-60">
                        <span>Masalah Kesehatan Mental</span>
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: center; align-items: center;">
                <img src="assets/img/bg/mental.jpg" alt="Background" style="width: 600px" />
            </div>
        </div>
        <br>
        <br>
        <div class="tab-area pb-90">
            <div class="container">
                <div class="row">
                    <div class="tab-content mt-120" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <div class="sycho-tab-img mb-30">
                                        <img src="assets/img/bg/coun.png" alt="" style="width: 500px" />
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-7">
                                    <div class="sycho-tab-content mt-30 mb-30">
                                        <div class="section-title mb-40">
                                            <span>Peer Counselling</span>
                                            <p class="tab-quote">
                                                Experience the Magic of Beautiful Solutions through Peer Counseling
                                            </p>
                                            <p style="font-family: Poppins">
                                                Bimbingan konseling teman sebaya atau peer counselor merupakan suatu
                                                cara
                                                bagi mahasiswa belajar bagaimana memperhatikan dan membantu mahasiswa
                                                lain,
                                                serta menerapkannya dalam kehidupan sehari-hari. Konseling sebaya
                                                merupakan
                                                suatu bentuk pendidikan psikologis yang disengaja dan sistematik.
                                                Konseling
                                                sebaya memungkinkan mahasiswa untuk memiliki keterampilan-keterampilan
                                                guna
                                                mengimplementasikan pengalaman kemandirian dan kemampuan mengontrol diri
                                                yang sangat bermakna bagi mahasiswa, karena para mahasiswa berdasarkan
                                                tingkat perkembangannya adalah individu-individu yang sedang menjalani
                                                usia
                                                remaja akhir
                                            </p>
                                            <div class="mb-50"></div>
                                            <a href="/konsultasi" class="c-btn" style="color: #ffffff">
                                                Konsultasi Sekarang
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
@endsection