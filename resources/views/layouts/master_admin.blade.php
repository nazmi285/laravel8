<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="manifest" href="/manifest.json">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/DataTables/datatables.min.css')}}"/>


    <!-- Styles -->
    <style type="text/css">
        /*.content {
            overflow: visible !important;
        }
        main{
            overflow: visible !important;
        }*/
    </style>
    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('/assets/volt/volt.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>
    <nav class="navbar navbar-dark bg-gray-800 px-4 col-12 d-md-none">
        <a class="navbar-brand me-lg-5" href="{{url('/home')}}">
            {{-- {{ config('app.name', 'Laravel') }} --}}
            <span class="sidebar-icon me-3">
                <img src="{{asset('/assets/volt/img/brand/light.png')}}" height="20" width="20" alt="Volt Logo">
            </span>
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-md-none collapsed btn btn-icon-only border-0" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <svg class="toggle-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path> 
                </svg>
            </button>
        </div>
    </nav>
    <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
        <div class="sidebar-inner px-2 pt-3">
            <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-3">
                <div class="d-flex align-items-center">
                    <div class="avatar-md me-4">
                        <img src="{{asset('/assets/volt/img/team/profile-picture-1.jpg') }}" class="card-img-top rounded-circle border-white"
                        alt="Bonnie Green">
                    </div>
                    <div class="d-block">
                        <h5 class="h5 ">Hi, {{Auth::user()->name}}</h5>
                        <div class="d-flex align-items-center">
                            <div class="bg-success dot rounded-circle me-1"></div>
                            <small>Online</small>
                        </div>
                    </a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
            <ul class="nav flex-column pt-3 pt-md-0">
                <li class="nav-item">
                    <a href="{{url('/home')}}" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon me-3">
                            <img src="{{asset('/assets/volt/img/brand/light.png')}}" height="auto" width="20" alt="Volt Logo">
                        </span>
                        <span class="mt-1 ms-1 sidebar-text">
                            {{ config('app.name', 'Laravel') }}
                        </span>
                    </a>
                </li>
                <li class="nav-item {{ Request::segment(1) == 'home' ? 'active' : '' }}">
                    <a href="{{url('home')}}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <span class="nav-link d-flex justify-content-between align-items-center {{ Request::segment(1) == 'user-management' ? '' : 'collapsed' }}" data-bs-toggle="collapse" data-bs-target="#user-management" aria-expanded="{{ Request::segment(1) == 'user-management' ? 'true' : 'false' }}">
                        <span>
                            <span class="sidebar-icon">
                                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </span>
                            <span class="sidebar-text">User Management</span>
                        </span>
                        <span class="link-arrow">
                            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </span>
                    <div class="multi-level collapse {{ Request::segment(1) == 'user-management' ? 'show' : '' }}" role="list" id="user-management" aria-expanded="false">
                        <ul class="flex-column nav">
                            <li class="nav-item {{ Request::segment(2) == 'user' ? 'active' : '' }}">
                                <a class="nav-link" href="{{url('user-management/user')}}">
                                    <span class="sidebar-text">User</span>
                                </a>
                            </li>
                            <li class="nav-item {{ Request::segment(2) == 'agent' ? 'active' : '' }}">
                                <a class="nav-link" href="{{url('user-management/admin')}}">
                                    <span class="sidebar-text">Admin</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <span class="nav-link d-flex justify-content-between align-items-center {{ Request::segment(1) == 'product-management' ? '' : 'collapsed' }}" data-bs-toggle="collapse" data-bs-target="#product-management" aria-expanded="{{ Request::segment(1) == 'product-management' ? 'true' : 'false' }}">
                        <span>
                            <span class="sidebar-icon">
                                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                            </span>
                            <span class="sidebar-text">Product Management</span>
                        </span>
                        <span class="link-arrow">
                            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </span>
                    <div class="multi-level collapse {{ Request::segment(1) == 'product-management' ? 'show' : '' }}" role="list" id="product-management" aria-expanded="false">
                        <ul class="flex-column nav">
                            <li class="nav-item {{ Request::segment(2) == 'product' ? 'active' : '' }}">
                                <a class="nav-link" href="{{url('product-management/products')}}">
                                    <span class="sidebar-text">products</span>
                                </a>
                            </li>
                            <li class="nav-item {{ Request::segment(2) == 'agent' ? 'active' : '' }}">
                                <a class="nav-link" href="{{url('product-management/Inventories')}}">
                                    <span class="sidebar-text">Inventories</span>
                                </a>
                            </li>
                            <li class="nav-item {{ Request::segment(2) == 'addons' ? 'active' : '' }}">
                                <a class="nav-link" href="{{url('product-management/addons')}}">
                                    <span class="sidebar-text">Add-Ons</span>
                                </a>
                            </li>
                            <li class="nav-item {{ Request::segment(2) == 'variations' ? 'active' : '' }}">
                                <a class="nav-link" href="{{url('product-management/variations')}}">
                                    <span class="sidebar-text">Variations</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ Request::segment(1) == 'orders' ? 'active' : '' }}">
                    <a href="{{url('orders')}}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                        </span>
                        <span class="sidebar-text">Orders</span>
                    </a>
                </li>
                <li class="nav-item {{ Request::segment(1) == 'bills' ? 'active' : '' }}">
                    <a href="{{url('bills')}}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                        </span>
                        <span class="sidebar-text">Bills</span>
                    </a>
                </li>

                <li class="nav-item {{ Request::segment(1) == 'settings' ? 'active' : '' }}">
                    <a href="{{url('settings')}}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </span>
                        <span class="sidebar-text">Settings</span>
                    </a>
                </li>

                <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
                <li class="nav-item">
                    <a href="/documentation/getting-started/overview/index.html" target="_blank" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Documentation </span> <span>
                        <span class="badge badge-sm bg-secondary ms-1">v1.0</span></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/upgrade-to-pro" class="btn btn-secondary d-flex align-items-center justify-content-center btn-upgrade-pro">
                        <span class="sidebar-icon d-inline-flex align-items-center justify-content-center">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span>Upgrade to Pro</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="content">
        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex align-items-center">
                        <h3>&nbsp;</h3>
                    </div>
                    <ul class="navbar-nav align-items-center">
          
                        <li class="nav-item dropdown ms-lg-3">
                            <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="media d-flex align-items-center">
                                    <img class="avatar rounded-circle" alt="Image placeholder" src="{{asset('/assets/volt/img/team/profile-picture-1.jpg') }}">
                                    <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                        <span class="mb-0 font-small fw-bold text-gray-900">{{  auth()->user()->first_name ? auth()->user()->first_name . ' ' . auth()->user()->last_name : 'User Name'}}
                                        </span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                                <a class="dropdown-item d-flex align-items-center" href="{{url('/profile')}}">
                                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd">
                                        </path>
                                    </svg>
                                    My Profile
                                </a>
                                <div role="separator" class="dropdown-divider my-1">
                                </div>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <div >
                                        <svg class="dropdown-icon text-secondary me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>Logout
                                    </div>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </main>

    
    {{-- <script src="{{asset('js/main.js')}}"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script> --}}
    <script type="text/javascript" src="{{asset('vendor/jQuery-3.6.0/jquery-3.6.0.min.js')}}"></script> 
    <!-- Core -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    {{-- Vendor --}}
    <script type="text/javascript" src="{{asset('vendor/DataTables/datatables.min.js')}}"></script>

    @stack('scripts')

</body>
</html>
