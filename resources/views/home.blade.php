@extends('layouts.main')

@section('title', $title)

@section('container')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Default Card -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><span class="d-none d-lg-block">Dibuat oleh <a href="#">Tim Inception</a></span>
                                <hr>
                            </h5>
                            <h1>
                                Selamat Datang
                            </h1>
                            <h5 style="opacity: 0.8;">Pengenalan wajah dalam sistem kehadiran Mahasiswa</h5>
                            <img class="gambar-depan" src="assets/img/logoCNN.png" alt="" width="615px">
                            <hr>

                            <!-- Isi Start -->
                            <p>Sistem presensi mahasiswa menggunakan wajah menggunakan model inception. Sistem ini kami kembangkan untuk mempermudah proses presensi mahasiswa di kampus.
                            </p>

                            <p>
                                Sistem ini menggunakan model inception untuk mendeteksi wajah mahasiswa. Model inception adalah model jaringan saraf konvolusional (CNN) yang dikembangkan oleh Google AI pada tahun 2014. Model ini memiliki struktur yang unik, yaitu menggunakan beberapa filter berukuran berbeda dalam satu layer. Hal ini memungkinkan model inception untuk belajar fitur-fitur wajah yang lebih beragam dan kompleks.
                            </p>

                            <!-- Isi End -->
                        </div>
                    </div><!-- End Default Card -->

                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>

</main><!-- End #main -->

@endsection