<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="manifest" href="/manifest.json">

    @livewireStyles

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        .offcanvas-start{
            width: 264px !important;
        }
        .offcanvas-end{
            width: 264px !important;
        }
        .nav-link{
            color: #212529 !important;
        }
    </style>
    @stack('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light bg-gradient">
            <div class="container col-md-8">
                <button class="btn btn-icon" id="dropdownUser"data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft"><i class="fas fa-lg fa-bars" aria-hidden="true"></i></button>
                <div class="col" id="navbarNav">
                    @yield('title')
                </div>
                {{-- <a class="navbar-brand float-center" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                <div class="d-flex">
                    <a href="#" class="d-block link-dark text-decoration" id="dropdownUser1"data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <!-- <div class="nav-item dropdown">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{-- {{ Auth::user()->name }} --}}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div> -->
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom py-0 shadow-lg">
            <div class="container p-0">
                <header class="d-flex justify-content-center w-100">  
                    <ul class="nav nav-justified w-100" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="{{route('home')}}" class="nav-link py-3 px-1">
                                <i class="fas fa-lg fa-home" aria-hidden="true"></i>
                                {{-- <br>
                                Home --}}
                            </a>
                        </li>
                        <!-- <li class="nav-item" role="presentation">
                            <a href="{{route('explore')}}" class="nav-link py-3 px-1">
                                <i class="fa fa-lg fa-compass" aria-hidden="true"></i>
                                <br>
                                Explore
                            </a>
                        </li> -->
                        <li class="nav-item" role="presentation">
                            <a href="{{route('product')}}" class="nav-link py-3 px-1">
                                <i class="fas fa-lg fa-box" aria-hidden="true"></i>
                                {{-- <br>
                                Product --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('notification')}}" class="nav-link py-3 px-1">
                                <i class="fa fa-lg fa-bell position-relative" aria-hidden="true">
                                <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span></i>

                                {{-- <br>
                                Notification --}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('store')}}" class="nav-link py-3 px-1">
                                <i class="fas fa-lg fa-store"></i>
                                {{-- <br>
                                Store --}}
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="{{route('setting')}}" class="nav-link py-3 px-1">
                                <i class="fa fa-lg fa-cog" aria-hidden="true"></i>
                                <br>
                                Setting
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link py-3 text-dark" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                                <button type="button" class="btn btn-primary position-relative">
                                    <i class="fas fa-lg fa-home position-relative"></i> <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">unread messages</span></span>
                                </button>
                            </a>
                        </li> -->
                    </ul>
                </header>
            </div>
        </nav>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasLeft" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use></svg> {{ config('app.name', 'Laravel') }}
                </h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body p-0">

                <div class="d-flex flex-column flex-shrink-0 p-3 bg-light">
                    <!-- <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                        <span class="fs-4">Sidebar</span>
                    </a> -->

                    <!-- <hr> -->
                    <ul class="nav nav-pills flex-column mb-auto">
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                                Home
                            </a>
                        </li> -->
                        <li>
                            <a href="{{route('familytree')}}" class="nav-link link-dark">
                                <i class="fas fa-sitemap" aria-hidden="true"></i>
                                FamilyTree
                            </a>
                        </li>
                        <li>
                            <a href="{{route('firebase')}}" class="nav-link link-dark">
                                <i class="fa fa-fire" aria-hidden="true"></i>
                                Firebase
                            </a>
                        </li>
                        <li>
                            <a href="{{route('bootstrap')}}" class="nav-link link-dark">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                Bootstrap 5
                            </a>
                        </li>
                        <li>
                            <a href="{{route('setting')}}" class="nav-link link-dark">
                                <i class="fa fa-lg fa-cog" aria-hidden="true"></i>
                                Settings
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <div class="col-12 text-center mt-3">
                    <a href="{{route('profile')}}">
                        <img src="https://github.com/mdo.png" alt="mdo" width="78" height="78" class="rounded-circle">
                    </a>
                </div>
            </div>
            <div class="offcanvas-body p-0 position-relative">
                <div class="position-absolute text-center  w-100">
                    <span class="offcanvas-title d-block fw-bold text-capitalize">{{Auth::user()->name}}</span>
                    <span class="text-muted ">{{Auth::user()->email}}</span>
                    <hr>
                </div>
                <div class="position-absolute bottom-0 start-0 w-100">
                    <hr>     
                    <ul class="nav flex-column mb-3">
                        <li>
                            <a class="nav-link link-dark" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    
                                <i class="fa fa-power-off " aria-hidden="true"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <main class="py-4 mt-5">
            @yield('content')
        </main>
    </div>
    
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    @livewireScripts

    @stack('scripts')

</body>
</html>
