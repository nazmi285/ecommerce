<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/mobile.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//{{-- fonts --}}.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
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
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white shadow-sm">
            <div class="container col-md-8">
                @if(Auth::guard('web')->check())
                    <a class="btn" href="{{ url('/home') }}">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                @endif
                <a class="navbar-brand float-center" href="{{ url('/store') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <div class="d-flex">

                    <a href="{{route('store.cart')}}" class="d-block link-dark text-decoration">
                        <livewire:store.trolley />
                        {{-- <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle"> --}}
                    </a>
                </div>
            </div>
        </nav>
        <main class="py-4 mt-5 position-relative">

            

            <div class="mb-3" id="mapholder"></div>
            @yield('content')
        </main>
    </div>
    
    <script src="{{asset('js/main.js')}}"></script>

    @livewireScripts

    @stack('scripts')
    <script>
        // window.onbeforeunload = function (evt) {
        //   var message = 'Are you sure you want to leave?';
        //   if (typeof evt == 'undefined') {
        //     evt = window.event;
        //   }
        //   if (evt) {
        //     evt.returnValue = message;
        //   }
        //   return message;
        // }
    </script>

</body>
</html>
