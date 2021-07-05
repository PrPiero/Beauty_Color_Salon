<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <!--<link href="{{-- asset('css/app.css') --}}" rel="stylesheet">-->
    <link rel="stylesheet" href="/assets/stylesinicio/stylescitas.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rochester&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&amp;family=Rochester&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <style>
        .msjenv{
            margin: 2em 0.5em 1em;
            padding: 0.2em 1em;
            border: 2px solid #00a0d2;
            border-color: #46b450;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: black !important;">

        <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active" style='font-size: 24pt;'>
            <a class="nav-link" href="{{ route('index') }}">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" style='font-size: 24pt;'>
            <a class="nav-link" href="/ReservarCita/Create">Servicios</a>
            </li>
            <li class="nav-item" style='font-size: 24pt;'>
            <a class="nav-link" href="{{ route('shop') }}">Productos</a>
            </li>
            <li class="nav-item" style='font-size: 24pt;'>
            <a class="nav-link" href="{{ route('login') }}">Acceder</a>
            </li>
        </ul>
        </div>
    </nav>

    @yield('contenido')

    <footer>
        <div class="footerinicio">
            <h1>VyN Beauty Color Salon</h1>
            <h2> Nosotros | Horarios | Preguntas Frecuentes | Termino y condiciones | Politicas de Privacidad | Blog |
                Libro de reclamaciones</h2>
            <nav>
                <a href=""><img src="/assets/img/vecwsp.png" alt=""></a>
                <a href=""><img src="/assets/img/vecfb.png" alt=""></a>

            </nav>
            <p>© 2021 Lima - Derechos reservados. Sitio por DevCop</p>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/935a263ba2.js" crossorigin="anonymous"></script>
</body>
</html>
