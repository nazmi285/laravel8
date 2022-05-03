<!doctype html>
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
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            font-family:sans-serif,Arial;
            font-size:10pt;
        }

        .tree {
            white-space: nowrap;
            min-width: 800px;
            min-height:500px;
        }
        .tree ul {
            padding-top: 20px;
            position: relative;
            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }
        .tree li {
            display: table-cell;
            text-align: center;
            list-style-type: none;
            position: relative;
            padding: 20px 5px 0 5px;
            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }
        /*We will use ::before and ::after to draw the connectors*/
        .tree li::before, .tree li::after {
            content: '';
            position: absolute;
            top: 0;
            right: 50%;
            border-top: 1px solid #ccc;
            width: 50%;
            height: 20px;
        }
        .tree li::after {
            right: auto;
            left: 50%;
            border-left: 1px solid #ccc;
        }
        /*We need to remove left-right connectors from elements without any siblings*/
        .tree li:only-child::after, .tree li:only-child::before {
            display: none;
        }
        /*Remove space from the top of single children*/
        .tree li:only-child {
            padding-top: 0;
        }
        /*Remove left connector from first child and right connector from last child*/
        .tree li:first-child::before, .tree li:last-child::after {
            border: 0 none;
        }
        /*Adding back the vertical connector to the last nodes*/
        .tree li:last-child::before {
            border-right: 1px solid #ccc;
            border-radius: 0 5px 0 0;
            -webkit-border-radius: 0 5px 0 0;
            -moz-border-radius: 0 5px 0 0;
        }
        .tree li:first-child::after {
            border-radius: 5px 0 0 0;
            -webkit-border-radius: 5px 0 0 0;
            -moz-border-radius: 5px 0 0 0;
        }
        /*Time to add downward connectors from parents*/
        .tree ul ul::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            border-left: 1px solid #ccc;
            width: 0;
            height: 20px;
        }
        .tree li div {
            /*border: 1px solid #ccc;*/
            padding: 5px;
            padding-top: 3px;
            padding-bottom: 3px;
            text-decoration: none;
            color: #666;
            font-family: arial, verdana, tahoma;
            font-size: 10px;
            display: inline-block;
            min-width: 28px;
            min-height: 28px;
            border-radius: 28px;
            -webkit-border-radius: 28px;
            -moz-border-radius: 28px;
            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }
        /*.tree li div .male {
            background-color:lightblue;
            display: inline-block;
            width:90px;
            padding:10px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
        }
        .tree li div .female {
            background-color:lightpink;
            display: inline-block;
            width:90px;
            padding:10px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
        }*/
        .tree li div .male {
            display: inline-block;
            /*width:90px;*/
            padding:4px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
        }
        .tree li div .female {
            /*background-color:lightpink;*/
            display: inline-block;
            /*width:90px;*/
            padding:4px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
        }
        .tree li div .spacer {
            background-color:lightblue;
            display: inline-block;
            /*width:10px;*/
        }
        /*Time for some hover effects*/
        /*We will apply the hover effect the the lineage of the element also*/
        .tree li div:hover, .tree li div:hover + ul li div {
            background: #c8e4f8;
            color: #111;
            /*border: 1px solid #94a0b4;*/
        }
        /*Connector styles on hover*/
        .tree li div:hover + ul li::after,
        .tree li div:hover + ul li::before,
        .tree li div:hover + ul::before,
        .tree li div:hover + ul ul::before {
            border-color: #94a0b4;
        }
    </style>
    <style type="text/css">
        ul.scrollmenu {
          overflow: auto;
          white-space: nowrap;
        }
        ul.scrollmenu .item {
          display: inline-block;
        }
    </style>
    @stack('styles')

    <link rel="manifest" href="/manifest.json">
    <link rel="apple-touch-icon" href="images/icons/icon-72x72.png" />
    <link rel="apple-touch-icon" href="images/icons/icon-96x96.png" />
    <link rel="apple-touch-icon" href="images/icons/icon-128x128.png" />
    <link rel="apple-touch-icon" href="images/icons/icon-144x144.png" />
    <link rel="apple-touch-icon" href="images/icons/icon-152x152.png" />
    <link rel="apple-touch-icon" href="images/icons/icon-192x192.png" />
    <link rel="apple-touch-icon" href="images/icons/icon-384x384.png" />
    <link rel="apple-touch-icon" href="images/icons/icon-512x512.png" />
    <meta name="apple-mobile-web-app-status-bar" content="#db4938" />
    <meta name="theme-color" content="#db4938" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white bg-gradient">
            <div class="container col-md-8">

                {{-- <button class="btn btn-icon" id="dropdownUser"data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft"><i class="fas fa-lg fa-bars" aria-hidden="true"></i></button> --}}
                <div class="col" id="navbarNav">
                    @yield('title')
                </div>
                 
                <div class="flex-shrink-0 dropdown">
                    <a href="#" class="d-block  text-decoration-none dropdown-toggle text-black" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="true">
                        {{-- <img src="https://github.com/mdo.png" alt="mdo" width="29" height="29" class="rounded-circle"> --}}
                        <i class="fas fa-2x text-secondary fa-user-circle"></i>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" data-popper-placement="bottom-end" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(-110px, 34px, 0px);">
                       
                        {{-- <li><a class="dropdown-item btn-light text-gray-500" href="#">Settings</a></li> --}}
                        <li><a class="dropdown-item btn-light text-gray-500" href="{{url('profile')}}">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div>
                {{-- <div class="d-flex">
                    <a href="#" class="d-block link-dark text-decoration" id="dropdownUser1"data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a> --}}

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
                {{-- </div> --}}
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom py-0 shadow-lg">
            <div class="container p-0">
                <header class="d-flex justify-content-center w-100">  
                    <ul class="nav nav-justified w-100" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="{{route('home')}}" class="nav-link pt-3 pb-0 px-1">
                                <i class="fas fa-lg fa-home" aria-hidden="true"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item" role="presentation">
                            <a href="{{route('explore')}}" class="nav-link pt-3 pb-0 px-1">
                                <i class="fa fa-lg fa-compass" aria-hidden="true"></i>
                                <br>
                                Explore
                            </a>
                        </li> -->
                        <li class="nav-item" role="presentation">
                            <a href="{{route('familytree')}}" class="nav-link pt-3 pb-0 px-1">
                                <i class="fas fa-lg fa-sitemap"></i>
                                <p>Family Tree</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item" role="presentation">
                            <a href="{{route('product')}}" class="nav-link pt-3 pb-0 px-1">
                                <i class="fas fa-lg fa-box" aria-hidden="true"></i>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{route('notification')}}" class="nav-link pt-3 pb-0 px-1">
                                <i class="fa fa-lg fa-bell position-relative" aria-hidden="true">
                                <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span></i>
                                <p>Notifications</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{route('store')}}" class="nav-link py-3 px-1">
                                <i class="fas fa-lg fa-store"></i>
                            </a>
                        </li> --}}
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
            @yield('content')
        </main>
    </div>
    

    <script src="{{asset('js/main.js')}}"></script>
    {{-- <script src="https://js.pusher.com/7.0/pusher.min.js"></script> --}}

    @livewireScripts

    @stack('scripts')

</body>
</html>
