<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Register Page</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/vendors/images/favicon-16x16.png">

    <!-- CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JS Bootstrap 5 (Opsional, untuk komponen seperti modal, dropdown, dll) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JS Bootstrap 5 (Opsional, untuk komponen seperti modal, dropdown, dll) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="/vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>

<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="login.html">
                    <h3>MetroRental.Id</h3>
                </a>
            </div>
            <div class="login-menu">
                <ul>
                    <li><a href="/admin/login">Login</a></li>
                </ul>
            </div>
        </div>
    </div>

     @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li class="text-center">{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="/vendors/images/login-page-img.png" alt="">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Daftar</h2>
                        </div>
                        <form method="POST" action="/admin/register/submit">
                            @csrf
                            <!-- Email -->
                            <div class="input-group custom">
                                <input type="email" name="email" class="form-control form-control-lg"
                                    placeholder="Email" required>
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-email"></i></span>
                                </div>
                            </div>

                            <!-- Username -->
                            <div class="input-group custom">
                                <input type="text" name="username" class="form-control form-control-lg"
                                    placeholder="Username" required>
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="input-group custom">
                                <input type="password" name="password" class="form-control form-control-lg"
                                    placeholder="Minimal 4 Karakter" required>
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>

                            <!-- Confirm Password -->
                            <div class="input-group custom">
                                <input type="password" name="password_confirmation" class="form-control form-control-lg"
                                    placeholder="Konfirmasi Password" required>
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>

                            <!-- Nama Lengkap -->
                            <div class="input-group custom">
                                <input type="text" name="nama_lengkap" class="form-control form-control-lg"
                                    placeholder="Nama Lengkap" required>
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-id-card"></i></span>
                                </div>
                            </div>

                            <!-- Kota -->
                            <div class="input-group custom">
                                <input type="text" name="kota" class="form-control form-control-lg"
                                    placeholder="Kota" required>
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-location"></i></span>
                                </div>
                            </div>

                            <input type="hidden" name="role" value="customer">

                            <!-- Submit + Opsi -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Daftar</button>
                                    </div>
                                    <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR
                                    </div>
                                    <div class="input-group mb-0">
                                        <a class="btn btn-outline-primary btn-lg btn-block" href="/admin/login">Login
                                            jika sudah punya akun</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script src="/vendors/scripts/core.js"></script>
    <script src="/vendors/scripts/script.min.js"></script>
    <script src="/vendors/scripts/process.js"></script>
    <script src="/vendors/scripts/layout-settings.js"></script>
</body>

</html>
