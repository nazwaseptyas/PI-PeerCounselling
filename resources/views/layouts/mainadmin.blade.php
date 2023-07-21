<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Yuk Cerita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/img/logo/logoyukcerita.png">
    <!-- Bootstrap Css -->
    <link href="assets2/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets2/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets2/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>


<body>
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="/admin" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="/assets/img/logo/logoyukcerita.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="/assets/img/logo/logoyukcerita.png" alt="" height="20">
                            </span>
                        </a>
                    </div>
                    <button type="button"
                        class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </div>

                <div class="d-flex">
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/img/icon/user.svg"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">Admin</span>
                            <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="/logout"><i
                                    class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span
                                    class="align-middle">Keluar</span></a>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="uil-cog"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="/admin" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="/assets/img/logo/logoyukcerita.png" alt="" height="50px">
                    </span>
                    <span class="logo-lg">
                        <img src="/assets/img/logo/yukceritalogo.png" alt="" height="80px">
                    </span>
                </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <div data-simplebar class="sidebar-menu-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        
                        <li class="menu-title">Dashboard Admin</li>
                        <li>
                            <a href="/admin">
                                <i class="uil-home-alt"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="/tabelartikel">
                                <i class="uil-home-alt"></i>
                                <span>Artikel</span>
                            </a>
                        </li>
                        <li>
                            <a href="/tabelkonsultasi">
                                <i class="uil-home-alt"></i>
                                <span>Konsultasi</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <div class="main-content">
            <main>@yield('container')</main>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                        </script> © Yuk Cerita
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets2/libs/jquery/jquery.min.js"></script>
    <script src="assets2/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets2/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets2/libs/simplebar/simplebar.min.js"></script>
    <script src="assets2/libs/node-waves/waves.min.js"></script>
    <script src="assets2/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets2/libs/jquery.counterup/jquery.counterup.min.js"></script>

    <!-- apexcharts -->
    <script src="assets2/libs/apexcharts/apexcharts.min.js"></script>

    <script src="assets2/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="assets2/js/app.js"></script>

</body>

</html>