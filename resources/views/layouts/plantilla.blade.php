<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('/src/ONOFF_LOGO_BLANCO.png') }}" type="image/x-icon">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/8e6d3dccce.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>

    <header>

        <nav class="navbar">
            <div class="container-fluid">
                <img src="{{ asset('/src/ONOFF_LOGO_GRANDE_2_BLANCO.png') }}">
                <div>
                    @if ($rolUser == 1)
                        <p><i class="fa-solid fa-user-lock"></i> Admin</p>
                    @elseif ($rolUser == 2)
                        <p><i class="fa-solid fa-users"></i> Gestor de Equipo</p>
                    @elseif ($rolUser == 3)
                        <p><i class="fa-solid fa-user-gear"></i> Tecnico</p>
                    @elseif ($rolUser == 4)
                        <p><i class="fa-solid fa-house-user"></i> Cliente</p>
                    @endif
                    <p><i class="fa-solid fa-building"></i>{{ ucfirst($sede) }}{{ ucfirst($idSede) }}</p>
                    <p><i class="fa-solid fa-user"></i> {{ ucfirst($userNombre) }} {{ ucfirst($userApell) }}</p>
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}">
                            <p><i class="fa-solid fa-right-from-bracket"></i> Logout</p>
                        </a>
                    </form>
                </div>
            </div>
        </nav>

    </header>

    @yield('content')

    <footer>
    </footer>

</body>

@yield('script')

</html>
