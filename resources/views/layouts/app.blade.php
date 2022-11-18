<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    
     -->
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js', 'resources/js/redsocial.js'])

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route ('home') }}"><img src="{{ asset ('/img/logo.png') }}" height="32"> Puzzle Network</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('posts.index') }}">Muro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('groups.index') }}">Grupos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('people') }}">Personas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('contact') }}">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('about') }}">Acerca de</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarme') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Desconectarme') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div style="margin-bottom: 250px;" class="container-fluid">

     <!-- el contenido de mis paginas -->

        @yield('content')

        @isset($code)
        <x-flash-message code="{{ $code }}" message="{{$message}}"/>
            
        @endisset
    </div>

    <footer class="text-white py-1 fixed-bottom bg-success">
        <div class="container">
            <p class="float-end mb-2 p-1">
                <a href="#" class="text-success bg-white p-2">Volver arriba</a>
            </p>
            <p class="mb-1">&copy; Hackademy part-time 4 by Aulab</p>
            <p class="mb-0">Puzzle network es la red social de los alumnos de la cuarta edición de la Hackademy.</p>
        </div>
    </footer>
</body>

</html>