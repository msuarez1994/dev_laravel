<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
@section('title')
    Login
@endsection

<link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <link href="{{ asset('assets/vendors/css/vendors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/components.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/themes/dark-layout.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/themes/bordered-layout.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/themes/semi-dark-layout.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/plugins/forms/form-validation.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/pages/authentication.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body class="dark-layout">

<div id="app" class="h-100">
        {{-- <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div> --}}
        <div class="content-wrapper">
            
            <div class="content-body">
                <div>
                    <div class="auth-wrapper auth-basic px-2">
                        <div class="auth-inner my-2">
                            <!-- Login basic -->
                            <div class="card mb-0">
                                <div class="card-body">
                                    <img src="{{ asset('images/logo_rtp.png') }}" alt="Logo RTP" width="330">
                                    <h4 class="card-title mb-1">Bienvenido!</h4>
                                    <form method="POST" action="{{ route('login') }}" autocomplete="off">
                                        @csrf
                                        <div class="mb-1">
                                            <label for="login-email" class="form-label">Correo</label>
                                            <!-- <input type="text" class="form-control" id="login-email" name="login-email" placeholder="john@example.com" aria-describedby="login-email" tabindex="1" autofocus /> -->
                                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-1">
                                            <div class="d-flex justify-content-between">
                                                <label class="form-label" for="login-password">Contraseña</label>
                                            </div>
                                            <div class="input-group input-group-merge form-password-toggle">
                                                <!-- <input type="password" class="form-control form-control-merge" id="login-password" name="login-password" tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password" /> -->
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" tabindex="3" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember"> Recordar mi usuario </label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary w-100" type="submit" tabindex="4">Acceder</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.js') }}"></script>
    <script src="{{ asset('assets/js/scripts/pages/auth-login.js') }}"></script>
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
</html>
