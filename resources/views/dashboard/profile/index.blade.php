@extends('layouts.main')

@section('title', $title)

@section('container')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- pesan berhasil update profile -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle me-1"></i>
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        @if(auth()->user()->image)
                        <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="Profile" class="rounded-circle">
                        @else
                        <img src="{{ asset('assets/img/blank-profile-picture.png') }}" alt="Profile" class="rounded-circle">
                        @endif
                        <h2>{{ auth()->user()->name }}</h2>
                        <h3>{{ auth()->user()->npm }}</h3>
                        <div class="social-links mt-2">

                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                <h5 class="card-title">Profile Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Nama</div>
                                    <div class="col-lg-9 col-md-8">{{ auth()->user()->name }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">NPM</div>
                                    <div class="col-lg-9 col-md-8">{{ auth()->user()->npm }}</div>
                                </div>

                            </div>

                        </div><!-- End Bordered Tabs -->

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                            <!-- Profile Edit Form -->
                            <form method="post" action="{{ url('/profile') }}" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                    <div class="col-md-8 col-lg-9">
                                        <img id="previewImage" src="{{ asset('assets/img/blank-profile-picture.png') }}" alt="Preview Profile" style="max-width: 100px; max-height: 100px;">
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image" onclick="document.getElementById('fileInput').click(); return false;">
                                                <i class="bi bi-upload"></i>
                                            </a>
                                            <input type="file" id="fileInput" style="position: absolute; top: 0; left: 0; opacity: 0; cursor: pointer;" accept=".jpg, .jpeg, .png" onchange="displayFileName()" name="image" class="@error('image') is-invalid @enderror">
                                            @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror

                                            <!-- js input file -->
                                            <script>
                                                function displayFileName() {
                                                    var fileInput = document.getElementById('fileInput');
                                                    var fileNameDisplay = document.getElementById('fileNameDisplay');
                                                    var previewImage = document.getElementById('previewImage');

                                                    if (fileInput.files.length > 0) {
                                                        var reader = new FileReader();

                                                        reader.onload = function(e) {
                                                            previewImage.src = e.target.result;
                                                        };

                                                        reader.readAsDataURL(fileInput.files[0]);

                                                        fileNameDisplay.innerText = fileInput.files[0].name;
                                                    }
                                                }
                                            </script>

                                            <a href="" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="name" type="text" class="form-control" id="name" value="{{ auth()->user()->name }}" placeholder="Nama anda">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="npm" class="col-md-4 col-lg-3 col-form-label">NPM</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="npm" type="text" class="form-control" id="npm" value="{{ auth()->user()->npm }}" placeholder="NPM anda" disabled>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                            <!-- End Profile Edit Form -->

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

@endsection