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
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white bg-gradient">
            <div class="container col-md-8">
                <button class="btn btn-icon" id="dropdownUser"data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft"><i class="fas fa-lg fa-bars" aria-hidden="true"></i></button>
                {{-- <div class="col" id="navbarNav">
                    @yield('title')
                </div> --}}
                <a class="navbar-brand float-center" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <div class="d-flex">
                    {{-- <a href="#" class="d-block link-dark text-decoration" id="dropdownUser1"data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a> --}}
                    <div class="nav-item dropdown">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right shadow" aria-labelledby="navbarDropdown" style="left:-90px;">
                            <a class="dropdown-item"  href="{{ route('profile') }}">
                                {{ Auth::user()->name }}
                            </a>
                            <a class="dropdown-item"  href="{{ route('setting') }}">
                                Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
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
                    <div class="m-3">
                        <span id="timer">02:00</span>
                    </div>
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

                    <ul class="nav nav-pills flex-column mb-auto">
                        <li>
                            <a href="{{route('bootstrap')}}" class="nav-link link-dark">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                Bootstrap 
                            </a>
                        </li>
                        <li>
                            <a href="{{route('setting')}}" class="nav-link link-dark">
                                <i class="fa fa-lg fa-cog" aria-hidden="true"></i>
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="{{route('laporan')}}" class="nav-link link-dark">
                                <i class="fas fa-chart-line" aria-hidden="true"></i>
                                Laporan
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
        <main class="py-4 mt-5 bg-white">
            <div class="container mb-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }} 
                        </div>
                    @endif
                    </div>
                </div>
            </div>

            @yield('content')
        </main>
    </div>

    
    <div class="modal sessionModal" id="sessionModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    @livewireScripts

    @stack('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function(){
            var minutes = 60 * 0.2,
                display = document.querySelector('#timer');
            startTimer(minutes, display); 
        });
        function startTimer(duration, display) {
            var timer = duration, minutes, seconds;

            var myVar = setInterval(function () {
                minutes = parseInt(timer / 60, 10)
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = duration;
                }

                if(timer == 0){
                    clearInterval(myVar);
                    $('#sessionModal').modal('show');
                }
            }, 1000);
        }
    </script>
</body>
</html>
