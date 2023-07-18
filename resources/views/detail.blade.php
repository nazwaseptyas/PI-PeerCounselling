@extends('layouts/main')

@section('container')

<body>
    <main>
        <div class="blog-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 mb-30">
                        <div class="blog-wrapper blog-standard blog-details">
                            <div class="blog-d-img">
                                <img src="assets/img/blog/b1.jpg" alt="" />
                            </div>
                            <div class="blog-text">
                                <div class="blog-meta">
                                    <span>
                                        <i class="far fa-calendar-alt"></i>
                                        <a href="/detail">05 May 2020</a>
                                    </span>
                                </div>
                                <h4>
                                    <a href="/detail">
                                        Launching Make App Store Optimization Foundation
                                    </a>
                                </h4>
                                <p>
                                    Sed perspicia unde omnis iste natus error voluptatem accsam dolor
                                    laudantium waset totamaperiam eaqipsaty quaenventore veritatis
                                    quasi architecto beatae But I must explain to you how all this
                                    mistaken idea of denouncing pleasure and praising pain was born
                                    and I will give you a complete account of the system, and expound
                                    the actual teachings of the great explorer of the truth, the
                                    master-builder of human happiness. No one rejects, dislikes, or
                                    avoids pleasure itself, because it is pleasure, but because those
                                    who do not know how to pursue pleasure rationally encounter
                                    consequences that are extremely painful. Nor again is there anyone
                                    who loves or pursues or desires to obtain pain of itself, because
                                    it is pain, but because occasionally circumstances occur in which
                                    toil and pain can procure him some great pleasure. To take a
                                    trivial example, which of us ever undertakes laborious physical
                                    exercise, except to obtain some advantage from it? But who has any
                                    right to find fault with a man who chooses to enjoy a pleasure
                                    that has no annoying consequences, or one who avoids a pain that
                                    produces no resultant pleasure
                                </p>
                                <div class="post-text mb-20">
                                    <blockquote>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam.
                                        </p>
                                        <footer>- Rosalina Pong</footer>
                                    </blockquote>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                        sunt in culpa qui officia deserunt.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                        sunt in culpa qui officia.
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="navigation-border pt-50 mt-40"></div>
                                    </div>
                                </div>
                                <div class="b-author mt-40 mb-60">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="bakix-navigation b-next-post text-left mb-30">
                                            <h4>
                                                <a href="/detail">Penulis</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="author-img">
                                        <img src="assets/img/icon/user.svg" alt="" />
                                    </div>
                                    <div class="author-text">
                                        <h3>MD. Salim Rana</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 mb-30">
                        <div class="widget mb-40">
                            <form class="search-form">
                                <input type="text" placeholder="Cari" />
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="widget mb-40">
                            <h3 class="widget-title">Kategori</h3>
                            <ul class="service-list">
                                <li>
                                    <a href="/detail">Semua Kategori </a>
                                </li>
                                <li>
                                    <a href="/detail">Industri dan Organisasi </a>
                                </li>
                                <li>
                                    <a href="/detail">Karir </a>
                                </li>
                                <li>
                                    <a href="/detail">Keluarga </a>
                                </li>
                                <li>
                                    <a href="/detail">Masalah Diri </a>
                                </li>
                                <li>
                                    <a href="/detail">Trauma </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>
@endsection