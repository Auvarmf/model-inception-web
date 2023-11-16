<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <meta content="Pengenalan wajah dalam sistem kehadiran Mahasiswa Unila" name="description">
    <meta content="unila, universitas lampung, presensi, ilkom, ilmu komputer, absen" name="keywords">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assetlogin/stylelogin.css">

    <!-- Bootsrtap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

    <!-- icon -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>{{ $title }}</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

        * {
            box-sizing: border-box;
        }

        body {
            background: #f6f5f7;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            margin: -20px 0 50px;
        }

        h1 {
            font-weight: bold;
            margin: 0;
            font-size: 32px;
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        span {
            font-size: 12px;
        }

        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 10px 0;
        }

        button {
            border-radius: 7px;
            border: 1px solid #555555;
            background-color: #FF4B2B;
            color: #FFFFFF;
            margin: 10px;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: gray;
        }

        form {
            background-color: #7ECBFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8p;
            width: 500px;
        }

        .container {
            background-color: #fff;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
                0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            overflow: hidden;
            width: 100%;
            max-width: 100%;
            min-height: 480px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {

            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }

            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            background: #FF416C;
            background-color: #fff;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: black;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        .social-container {
            margin: 20px 0;
        }

        .social-container a {
            border: 1px solid #DDDDDD;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }

        footer {
            background-color: #222;
            color: #fff;
            font-size: 14px;
            bottom: 0;
            position: fixed;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 999;
        }

        footer p {
            margin: 10px 0;
        }

        footer i {
            color: red;
        }

        footer a {
            color: #3c97bf;
            text-decoration: none;
        }

        .mb-3 {
            text-align: left;
        }

        .mb-3 p {
            text-align: right;
        }

        .form-container .ghost-btn {
            border-radius: 7px;
            border: 1px solid #555555;
            color: #555555;
            margin: 10px;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* CSS untuk tampilan HP */
        @media (max-width: 767px) {
            .container {
                max-width: 100%;
                padding: 0 15px;
                display: flex;
                flex-direction: column-reverse;
            }

            .form-container {
                width: 100%;
            }

            .overlay-container {
                display: none;
            }

            form {
                border-radius: 0px;
            }

            /* Gaya CSS untuk label dan input pada layar HP */
            .form-label {
                text-align: center;
            }

            .form-label,
            input {
                width: 295px;
                margin: 5px 0;
            }

            .sign-up-container {
                right: 0;
                width: 100%;
                margin-bottom: -10px;
            }

            .container.right-panel-active .sign-up-container {
                transform: translateX(0%);
                opacity: 1;
                z-index: 5;
                animation: show 0.6s;
            }

            .mb-3 input {
                border-radius: 8px;
            }

            .mb-3 img {
                opacity: 0;
            }
        }

        .right-border-radius {
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .container.right-panel-active form {
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
        }

        .mb-3 input {
            border-radius: 8px;
            margin: 5px;
        }

        .mb-3 img {
            height: 45px;
        }
    </style>
</head>

<body class="loginn">
    <!-- Login Pemilik -->
    <div class="container" id="container">
        <!-- Bagian Yang tidak terpakai -->
        <!-- <div class="form-container sign-up-container">
            <form action="/register" method="post">
                @csrf
                <hr>
                <img src="assetlogin/img/logounila.png" width="123px" alt="" srcset="">
                <span>Buat Akun</span>
                <div class="mb-3 mt-3">
                    <input type="text" placeholder="Nama" name="name" class="@error('name') is-invalid @enderror"><img src="assetlogin/img/person.png">
                    @error('name')
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                    @enderror

                    <input type="text" placeholder="NPM" name="npm"><img src="assetlogin/img/person.png">

                    <input type="email" placeholder="Email" name="email"><img src="assetlogin/img/emailicon.png">

                    <input type="password" placeholder="Password" name="password"><img src="assetlogin/img/lockicon.png">
                </div>
                <button style="background: #555555">Daftar</button>
                <a style="color: #555555" class="ghost-btn" id="signIn">Masuk</a>
            </form>
        </div> -->

        <!-- Form Login -->
        <div class="form-container sign-in-container">
            <form action="/login" method="POST" class="right-border-radius">
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @csrf
                <a href="/"><img src="assetlogin/img/logounila.png" width="123px" alt="" srcset=""></a>
                <span>Masuk Dengan Akun</span>
                <hr>

                <!-- Form input -->
                <div class="mb-3">
                    <input type="email" placeholder="Email" name="email" class="@error('email') is-invalid @enderror" autofocus required value="{{ old('email') }}"><img src="assetlogin/img/emailicon.png">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <input type="password" placeholder="Password" name="password" required><img src="assetlogin/img/lockicon.png">
                    <a href="#">Forgot your password?</a>
                </div>

                <button style="background: #555555" class="btnmasuk" name="login">Masuk</button>
                <a href="/register" style="color: #555555" class="ghost-btn">Daftar</a>
            </form>

        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Buat Akun</h1>
                    <img src="assetlogin/img/logoccninception.png" alt="" style="width: 450px">
                    <h5><b>UNIVERSITAS LAMPUNG</b></h5>
                    <p>Pengenalan wajah dalam sistem kehadiran Mahasiswa</p>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Masuk</h1>
                    <img src="assetlogin/img/logoccninception.png" alt="" style="width: 450px">
                    <h5><b>UNIVERSITAS LAMPUNG</b></h5>
                    <p>Pengenalan wajah dalam sistem kehadiran Mahasiswa</p>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const container = document.getElementById('container');
            const signUpContainer = document.querySelector('.sign-up-container');
            const signInContainer = document.querySelector('.sign-in-container');

            // Check if the user was on the register form
            const isSignUpActive = sessionStorage.getItem('isSignUpActive');

            if (isSignUpActive) {
                container.classList.add("right-panel-active");
                signUpContainer.style.top = `${signInContainer.offsetTop}px`;
            }

            signUpButton.addEventListener('click', () => {
                container.classList.add("right-panel-active");
                signUpContainer.style.top = `${signInContainer.offsetTop}px`;

                // Store the state in sessionStorage
                sessionStorage.setItem('isSignUpActive', 'true');
            });

            signInButton.addEventListener('click', () => {
                container.classList.remove("right-panel-active");
                signUpContainer.style.top = "0";

                // Remove the state from sessionStorage
                sessionStorage.removeItem('isSignUpActive');
            });
        });
    </script>


    <!-- Bootsrtap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>