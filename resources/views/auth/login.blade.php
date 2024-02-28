<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manajemen Layanan IT - BPS Provinsi Sulawesi Utara</title>
    {{-- Thubnail --}}
    <link rel="icon" href="/img/logo-bps.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="/css/sb-admin-2.css" rel="stylesheet">
</head>

<body>

    <div class="container" style="height: 100vh">

        <!-- Outer Row -->
        <div class="row justify-content-center align-items-center" style="margin-top: 150px">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 rounded-4">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block bg-primary">
                                <div class="p-5">
                                    <img src="/img/bps.png" alt="" width="250">
                                </div>
                                <h1 class="fs-5 text-white ml-4 p-4 mb-4">Selamat Datang di Sistem Manajamen Layanan IT
                                    di
                                    BPS Provinsi Sulawesi Utara</h1>

                            </div>
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 font-weight-bold">Sign-In</h1>
                                    </div>

                                    @if (session()->has('loginError'))
                                    <div class="alert alert-danger alert-dismissible show fade">
                                        {{ session('loginError') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                    @endif

                                    <form class="user" method="POST" action="/auth/login">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text"
                                                class="form-control form-control-user @error('username') is-invalid @enderror "
                                                id="exampleInputEmail" name="username" placeholder="Username"
                                                value="{{ old('username') }}" autocomplete="off" autofocus>
                                            @error("username")
                                            <div class="invalid-feedback">
                                                Username tidak boleh kosong
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="password"
                                                class="form-control form-control-user @error('password') is-invalid @enderror"
                                                placeholder=" Password" autocomplete="off" name="password">

                                            @error("password")
                                            <div class="invalid-feedback">
                                                Password tidak boleh kosong
                                            </div>
                                            @enderror


                                        </div>
                                        <button type="submit"
                                            class="btn btn-primary btn-user btn-block font-weight-bold">
                                            Log in
                                        </button>
                                        <hr>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>