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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        .offcanvas-start{
            width: 250px !important;
        }
        .offcanvas-end{
            width: 250px !important;
        }
    </style>
    @stack('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                
                <div class="d-flex">
                    <a href="#" class="d-block link-dark text-decoration" id="dropdownUser1"data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <div class="col-12 text-center">
                                <img src="https://github.com/mdo.png" alt="mdo" width="78" height="78" class="rounded-circle">
                            </div>
                            <!-- <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
                        </div>
                        <div class="offcanvas-body p-0">
                            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light">
                                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                                    <span class="fs-4">Sidebar</span>
                                </a>
                                <hr>
                                <ul class="nav nav-pills flex-column mb-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link active" aria-current="page">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link link-dark">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link link-dark">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                                            Orders
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link link-dark">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                                            Products
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link link-dark">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                                            Customers
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="nav-item dropdown">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    <script type="text/javascript">
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

    @stack('scripts')
    
</body>
</html>
