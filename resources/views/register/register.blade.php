<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
</head>

<body>

<div class="body">

    <div class="register-page">

        <!-- LEFT PANEL -->
        <div class="left-panel">

            <div class="container"></div>
            <div class="div"></div>
            <div class="container-2"></div>

            <div class="container-wrapper">

                <div class="container-3">

                    <div class="icon-wrapper">
                        <div class="icon">
                            <img class="vector" src="{{ asset('img/register/vector-40.svg') }}">
                            <img class="img" src="{{ asset('img/register/vector-9.svg') }}">
                            <img class="vector-2" src="{{ asset('img/register/vector-23.svg') }}">
                        </div>
                    </div>

                    <div class="text">
                        <div class="text-wrapper">Salesight</div>
                    </div>

                </div>

                <div class="container-4">

                    <div class="container-5">

                        <div class="icon-2">
                            <img class="vector-3" src="{{ asset('img/register/vector-5.svg') }}">
                            <img class="vector-4" src="{{ asset('img/register/vector-16.svg') }}">
                            <img class="vector-5" src="{{ asset('img/register/vector-14.svg') }}">
                            <img class="vector-6" src="{{ asset('img/register/vector-31.svg') }}">
                            <img class="vector-7" src="{{ asset('img/register/vector-36.svg') }}">
                        </div>

                        <div class="text-wrapper-2">
                            Admin Mode
                        </div>

                    </div>

                    <div class="container-6">

                        <p class="bergabung-dengan">
                            <span class="span">Bergabung dengan<br></span>
                            <span class="text-wrapper-3">Salesight</span>
                        </p>

                        <p class="kelola-data">
                            Kelola data penjualan dan dapatkan insight bisnis dengan mudah bersama tim Anda.
                        </p>

                    </div>

                </div>

            </div>

        </div>

        <!-- RIGHT PANEL -->
        <div class="container-19">

            <div class="container-20">

                <div class="container-21">

                    <div class="container-22">

                        <div class="icon-5">
                            <img class="vector-3" src="{{ asset('img/register/vector-13.svg') }}">
                            <img class="vector-4" src="{{ asset('img/register/vector-4.svg') }}">
                            <img class="vector-5" src="{{ asset('img/register/vector-24.svg') }}">
                            <img class="vector-6" src="{{ asset('img/register/vector-12.svg') }}">
                            <img class="vector-7" src="{{ asset('img/register/vector-2.svg') }}">
                        </div>

                        <div class="text-wrapper-7">
                            Daftar Akun Baru
                        </div>

                    </div>

                    <div class="heading">
                        <div class="text-wrapper-8">
                            Buat Akun Salesight
                        </div>
                    </div>

                    <div class="paragraph">
                        <p class="isi-informasi-di">
                            Isi informasi di bawah dan pilih peran Anda untuk memulai.
                        </p>
                    </div>

                </div>

                <!-- FORM -->
                <form class="form" method="POST" action="{{ route('register') }}">

                    @csrf

                    <!-- ROLE -->
                    <div class="container-23">

                        <div class="label">
                            <div class="text-wrapper-9">
                                Pilih Peran Anda
                            </div>
                        </div>

                        <div class="container-24">

                            <label class="button">

                                <input type="radio" name="role" value="owner" hidden>

                                <div class="container-25"></div>

                                <img class="container-26"
                                    src="{{ asset('img/register/container-2.svg') }}">

                                <div class="text-6">
                                    <div class="text-wrapper-10">
                                        Owner
                                    </div>
                                </div>

                                <div class="text-7">
                                    <div class="text-wrapper-11">
                                        Full Access
                                    </div>
                                </div>

                                <div class="paragraph-2">
                                    <p class="p">
                                        Kelola bisnis dan semua cabang
                                    </p>
                                </div>

                            </label>

                            <label class="button-2">

                                <input type="radio" name="role" value="admin" hidden>

                                <div class="container-25"></div>

                                <div class="container-27">

                                    <div class="icon">
                                        <img class="vector-8"
                                            src="{{ asset('img/register/vector-42.svg') }}">

                                        <img class="vector-9"
                                            src="{{ asset('img/register/vector-8.svg') }}">

                                        <img class="vector-10"
                                            src="{{ asset('img/register/vector-41.svg') }}">
                                    </div>

                                </div>

                                <div class="text-8">
                                    <div class="text-wrapper-12">
                                        Admin
                                    </div>
                                </div>

                                <div class="text-9">
                                    <div class="text-wrapper-13">
                                        Data Entry
                                    </div>
                                </div>

                                <div class="input-dan-kelola-wrapper">
                                    <p class="input-dan-kelola">
                                        Input dan kelola data penjualan untuk cabang tertentu
                                    </p>
                                </div>

                            </label>

                        </div>

                    </div>

                    <!-- SEPARATOR -->
                    <div class="container-28">

                        <div class="container-29"></div>

                        <div class="informasi-akun-wrapper">
                            <div class="informasi-akun">
                                INFORMASI AKUN
                            </div>
                        </div>

                        <div class="container-30"></div>

                    </div>

                    <!-- NAMA -->
                    <div class="container-31">

                        <div class="label">
                            <div class="text-wrapper-9">
                                Nama Lengkap
                            </div>
                        </div>

                        <div class="container-32">

                            <div class="div-wrapper-2">

                                <input
                                    type="text"
                                    name="name"
                                    class="input-field"
                                    placeholder="Masukkan nama lengkap Anda"
                                    required
                                >

                            </div>

                        </div>

                    </div>

                    <!-- EMAIL -->
                    <div class="container-34">

                        <div class="label">
                            <div class="text-wrapper-9">
                                Email
                            </div>
                        </div>

                        <div class="container-32">

                            <div class="div-wrapper-2">

                                <input
                                    type="email"
                                    name="email"
                                    class="input-field"
                                    placeholder="nama@perusahaan.com"
                                    required
                                >

                            </div>

                        </div>

                    </div>

                    <!-- PASSWORD -->
                    <div class="container-34">

                        <div class="label">
                            <div class="text-wrapper-9">
                                Password
                            </div>
                        </div>

                        <div class="container-32">

                            <div class="password-input">

                                <input
                                    type="password"
                                    name="password"
                                    class="input-field"
                                    placeholder="Minimal 8 karakter"
                                    required
                                >

                            </div>

                        </div>

                    </div>

                    <!-- KONFIRMASI PASSWORD -->
                    <div class="container-34">

                        <div class="label">
                            <div class="text-wrapper-9">
                                Konfirmasi Password
                            </div>
                        </div>

                        <div class="container-32">

                            <div class="password-input">

                                <input
                                    type="password"
                                    name="password_confirmation"
                                    class="input-field"
                                    placeholder="Ulangi password Anda"
                                    required
                                >

                            </div>

                        </div>

                    </div>

                    <!-- BUTTON -->
                    <button type="submit" class="button-4">

                        <div class="text-wrapper-15">
                            Daftar Sekarang
                        </div>

                        <div class="icon-8">

                            <img class="vector-21"
                                src="{{ asset('img/register/vector-29.svg') }}">

                            <img class="vector-22"
                                src="{{ asset('img/register/vector-30.svg') }}">

                        </div>

                    </button>

                </form>

                <!-- LOGIN -->
                <div class="sudah-punya-akun-wrapper">

                    <p class="sudah-punya-akun">

                        <span class="text-wrapper-17">
                            Sudah punya akun?
                        </span>

            <a href="#" class="text-wrapper-18">
                Login di sini
            </a>

                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>