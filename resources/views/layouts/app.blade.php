<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ \Illuminate\Support\Facades\Auth::user()->role }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('third_party_stylesheets')

    @stack('page_css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Main Header -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" id="drop-down-profile">
                    <li class="bg-default text-left pl-2 pt-1">
                        <p>Role: {{ Auth::user()->role }}</p>
                    </li>
                    <li class="bg-default text-left pl-2 pt-1">
                        <p>Name: {{ Auth::user()->name }}</p>
                    </li>
                    <li class="bg-default text-left pl-2 pt-1">
                        <p>Password: {{ Auth::user()->password }}</p>
                    </li>
                    <li class="bg-default text-left pl-2 pt-1">
                        <p>Login: {{ Auth::user()->phone }}</p>
                    </li>
                    @if(Auth::user()->role === 'Agitator')
                        <p class="bg-default text-left pl-2 pt-1">Referral link: {{Auth::user()->info->referral_link}}</p>
                    @endif
                    <li class="user-footer">
                        <a href="#" class="btn btn-default btn-flat float-right"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Sign out
                        </a>
                        @if(Auth::user()->role === 'Agitator')
                            <a href="{{ route('generate-referral-link') }}" class="btn btn-secondary">Generate referral
                                link</a>
                        @endif
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
@include('layouts.sidebar')
    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>
    <footer class="main-footer">
    </footer>
</div>

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/candidate.js') }}" defer></script>

@yield('third_party_scripts')

@stack('page_scripts')
</body>
</html>
