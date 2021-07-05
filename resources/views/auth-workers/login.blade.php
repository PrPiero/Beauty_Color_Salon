<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">
    <link rel="stylesheet" href="/assets/login/style.css">
</head>
<body>
    <div class="login-container">
        <img class="image-container" src="/assets/login/images/imagen3.png" alt="">
        <div class="login-info-container">
            <h1 class="title">¡Bienvenid@ Nuevamente!</h1>

            <h2>“La belleza de una mujer es sinònimo de felicidad,
                su belleza externa es un encanto para la mirada,
                pero su belleza interna es música para el alma y el corazón”</h2><br>
            <form class="inputs-container" method="POST" action="{{ route('admin.login') }}">
                @csrf
                <div>
                    <span>Correo Electronico</span> <br>
                    <input class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus type="text" name="email">
                    <i class="fas fa-envelope iconoemail"></i>
                    @error('email')
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <span>Contraseña</span><br>
                    <input class="input @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus type="password">
                    <i class="fas fa-lock iconopass"></i>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn">Ingresar</button>
            </form>
            <!--<p class="mb-1">
                    <a href="{{-- route('password.request') --}}">Olvidé mi contraseña</a>
            </p>-->
            <!--<p class="mb-0">
                <a href="{{-- route('register') --}}" class="text-center">Registrarse</a>
            </p>-->
        </div>
    </div>
    @include('admin.partials.modal_auth', ['sessionLINK' => session()->has('flash'), 'sessionTEXT' => session('flash')])

    <!-- jQuery -->
    <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Fonts Awesome -->
    <script src="https://kit.fontawesome.com/935a263ba2.js" crossorigin="anonymous"></script>

    <script>$('#exampleModal').modal('show');</script>
</body>
</html>
