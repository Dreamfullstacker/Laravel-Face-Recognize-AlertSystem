<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FAICEALERT</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/source_img/favicon.png">
    <!-- Styles -->
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fa.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard_app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container" style="max-width: inherit;" >
                <div class="d-flex align-items-center res-part">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="images/source_img/logo_faicealert.png" />
                    </a>
                    <div class="position-relative">
                        <a class="position-absolute" onclick="openSearchInput();" style="left: 7px; top: 9px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                <path     fill="#838A96" d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                            </svg>
                        </a>
                        <input type="text" class="search-input" name="search" value="" placeholder="Search for stores and people...">
                    </div>
                </div>
                <div class="d-flex align-items-center  res-part">
                    <div class="dashboard-tab mr-3">
                        <a id="dashboard_btn" class="tablinks " href="{{ route('home') }}">
                            <p > Dashboard </p>
                        </a>
                        <a id="liveview_btn" class="tablinks"  href="{{ route('liveview') }}">
                        <p > Live View </p>
                        </a>
                    </div>
                    <a class="mr-3">
                        <div class="bell_box">
                            <img src="images/source_img/bell.svg" width=21 />
                            <div class="notification_counter"><span class="danger-counter">1</span></div>
                        </div>     
                    </a>
                    <button class="btn btn-support">
                        <img src="images/source_img/commet.png" class="support-img">
                        <p> Support </p>
                    </button>
                </div>

                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ asset('js/app.min.js') }}"></script> -->
    <script type="text/javascript" src="{{ asset('js/toastr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/dashboard_app.js') }}"></script>
    @yield('scripts_extend')
</body>
</html>
