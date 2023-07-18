@extends('layouts/mainadmin')

@section('container')

<body>
    <main>
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-6 col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end mt-2">
                                    <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div>
                                </div>
                                <div>
                                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">100</span></h4>
                                    <p class="text-muted mb-0">Total Artikel</p>
                                </div>
                                <p class="text-muted mt-3 mb-0">
                                    <a href="/tabelartikel" class="text-success me-1">
                                        Lihat Artikel
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end mt-2">
                                    <div id="growth-chart" data-colors='["--bs-warning"]'></div>
                                </div>
                                <div>
                                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">100</span></h4>
                                    <p class="text-muted mb-0">Konsultasi</p>
                                </div>
                                <p class="text-muted mt-3 mb-0">
                                    <a href="/tabelkonsultasi" class="text-success me-1">
                                        Lihat Data Konsultasi
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div> <!-- end col-->
                </div>

            </div>
    </main>
</body>
@endsection