<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @auth()
                    <ul class="navbar-nav mr-auto">
						<!--Nav Bar Hooks - Do not delete!!-->
						<!--<li class="nav-item">
                            <a href="{{ url('/permissions') }}" class="nav-link"><i class="fab fa-laravel text-info"></i> Permissions</a> 
                        </li>-->
                        <!--@role(['usuario','director','sub_secretaria','secretaria','admin'])-->
                        <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link"><i class="fa fa-home text-semujer"></i> Home</a> 
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/evaluaciones/1') }}" class="nav-link"><i class="fab fa-readme text-semujer"></i> Evaluacion</a> 
                        </li>  
                        <li class="nav-item">
                            <a href="{{ url('/cuestionarios') }}" class="nav-link"><i class="fas fa-calendar text-semujer"></i> Cuestionarios</a> 
                        </li>                 
                      
                        
                        <li class="nav-item">
                            <a href="{{ url('/opciones') }}" class="nav-link"><i class="fa fa-home text-semujer"></i> Opciones</a> 
                        </li>
                      
						<li class="nav-item">
                            <a href="{{ url('/preguntas') }}" class="nav-link"><i class="fas fa-users text-semujer"></i> Preguntas</a> 
                        </li>
                       
						<li class="nav-item">
                            <a href="{{ url('/respuestas') }}" class="nav-link"><i class="fas fa-lock text-semujer"></i> Respuestas</a> 
                        </li>
                       
						<li class="nav-item">
                            <a href="{{ url('/secciones') }}" class="nav-link"><i class="fas fa-user-lock text-semujer"></i> Secciones</a> 
                        </li>
                       
						<li class="nav-item">
                            <a href="{{ url('/tipos') }}" class="nav-link"><i class="fas fa-check text-semujer"></i> Tipos</a> 
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/reporte') }}" class="nav-link"><i class="fas fa-check text-semujer"></i> Descargar respuestas</a> 
                        </li>
                      
					@endauth()

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                                        {{ __('Logout') }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
