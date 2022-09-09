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
    <title>Halaman Login</title>
    <meta name="description" content="Halaman Login">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="images/favicon.png" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
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
            margin-top: 100px;
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.068), 0 6px 20px 0 rgba(0, 0, 0, 0.075);
            padding: 40px 40px 20px 40px;
        }

        .form-group input {
            border-radius: 5px;
            margin-top: 7px;
        }

        .form-group label {
            text-transform: capitalize;
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
                <div class="login-form">
                    <div class="login-logo">
                        <a href="{{route('home')}}">
                            <img class="align-content" src="{{URL::to('server/img/logo.svg')}}" alt="" height=60px>
                        </a>
                    </div>
                    <form method="post" action="{{ route('auth.login') }}">
                        @csrf
                        
                        <div class="form-group">
                            <label>Emai</label>
                            <input type="email" class="form-control" placeholder="Email" name="email" required="">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" required="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            {{-- <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label> --}}

                        </div>
                        <button type="submit" class="btn btn-ict text-light btn-flat m-b-30 m-t-30">Masuk</button>
                        <div class="register-link m-t-15 text-center">
                            <p>Tidak Punya akun? <a href="{{ route('auth.register') }}"> Daftar Disini</a></p>
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

</body>

</html>