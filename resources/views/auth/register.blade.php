<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Daftar</title>
    <meta name="description" content="Halaman Daftar">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="images/favicon.png" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stlesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{URL::to('server/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{URL::to('server/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <style>
        .btn-ict {
            margin-top: 20px;
            margin-bottom: 20px;
            background: #EE4540;
            border-radius: 100px;
        }

        .login-form {
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.068), 0 6px 20px 0 rgba(0, 0, 0, 0.075);
            padding: 40px 40px 20px 40px;
        }

        .login-form input {
            border-radius: 5px;
            margin-top: 3px;
        }

        .login-form label {
            text-transform: capitalize;
            margin-top: 10px;
        }

        .select-form {
            margin-top: 7px;
            height: 37px;
        }
    </style>
</head>

<body class="bg-light">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                @if (session()->has('status') && session()->get('status'))
                    <div class="alert alert-success">
                      <strong>{{session()->get('message')}}</strong>
                    </div>
                @elseif(session()->has('status') && session()->get('status') == false)
                    <div class="alert alert-danger">
                      <strong>{{session()->get('message')}}</strong>
                    </div>
                @endif

                <div class="login-logo">
                    <a href="{{route('home')}}">
                        <img class="align-content" src="{{URL::to('server/img/logo.svg')}}" alt="" width="200px">
                    </a>
                </div>
                <div class="login-form">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{route('auth.register')}}">
                    	@csrf
                        <div class="row justify-content-md-center">
                            <div class="col-md-6 mb-3 mb-lg-0 col-lg">
                                <label>Nama Ketua</label>
                                <div>
                                    <input class="form-control" placeholder="Masukkan Nama Ketua" name="nama_anggota[]" required="">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3 mb-lg-0 col-lg">
                                <label>Kategori Lomba</label>
                                <div>
                                    <select name="kategori_lomba" id="jadwal-perjalanan" class="form-control" required="">
                                        <option class="default-opt" value="" selected disabled>Pilih Kategori Lomba
                                        </option>
                                        <option value="1">Cinematography</option>
                                        <option value="2">Innovative App Idea</option>
                                        <option value="3">Micro Drone Race</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="col-md-6 mb-3 mb-lg-0 col-lg">
                                <label>Nama Peserta 1</label>
                                <div>
                                    <input class="form-control" placeholder="Masukkan Nama Peserta 1" name="nama_anggota[]">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mb-lg-0 col-lg">
                                <label>Nama Peserta 2</label>
                                <div>
                                    <input class="form-control" placeholder="Masukkan Nama Peserta 2" name="nama_anggota[]">
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-md-center">
                            <div class="col-md-6 mb-3 mb-lg-0 col-lg col-xs-12">
                                <label>Nama Tim</label>
                                <div>
                                    <input class="form-control" placeholder="Masukkan Nama Tim Kamu" name="nama_tim" required="">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mb-lg-0 col-lg col-xs-12">
                                <label>Kota Asal</label>
                                <div>
                                    <input class="form-control" placeholder="Masukkan Kota Asal Tim Kamu" required="" name="asal_tim">
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-md-center">
                            <div class="col-md-6 mb-3 mb-lg-0 col-lg">
                                <label>Email</label>
                                <div>
                                    <input type="email" class="form-control" placeholder="Masukkan Email Ketua" required="" name="email">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mb-lg-0 col-lg col-xs-12">
                                <label>No. HP</label>
                                <div>
                                    <input class="form-control" placeholder="Masukkan Nomor HP Ketua" required="" name="no_telp">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="col-md-12 mb-3 mb-lg-0 col-lg">
                                <label>Password</label>
                                <div>
                                    <input class="form-control" placeholder="Masukkan Password" required="" name="password" type="password">
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-md-center">
                            <div class="col-md-4 mb-3 mb-lg-0">
                                <button type="submit"
                                    class="btn btn-ict text-light btn-flat m-b-30 m-t-30">Register</button>
                            </div>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Sudah punya akun?<a href="{{route('auth.login')}}">Masuk</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{URL::to('server/js/main.js')}}"></script>

    <script>
        if (document.getElementById('select-lomba').value == "apps") {
            $("#judul-lomba").attr("placeholder", "Type a Location").val("").focus().blur();
        }
    </script>
</body>

</html>