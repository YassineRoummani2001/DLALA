<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="icon" href="{{asset('assets/Logo/Logo_D_1.png')}}">
    <title>DLALA</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="sidebar">
    <div class="logo-details">
    <img src="{{asset('assets/Logo/Logo_D_1.png')}}" width="60" alt="logo">
    <span class="logo_name"><img src="{{asset('assets/Logo/Logo_name_DLALA_1.png')}}" width="90" height="100" alt="logo"></span>
    </div>
    <ul class="nav-links">
        <li>
        <a href="{{url('/annonce_admin')}}">
            <i class='bx bx-copy' ></i>
            <span class="links_name">Annonces</span>
        </a>
        </li>
        <li>
            <a href="{{url('/categorie_admin')}}">
            <i class='bx bx-category' ></i>
            <span class="links_name">Categories</span>
            </a>
        </li>
        <li>
            <a href="{{url('/sous_categorie_admin')}}">
            <i class='bx bx-box' ></i>
            <span class="links_name">Sous Categories</span>
            </a>
        </li>
        <li>
        <a href="{{url('/etat_admin')}}">
            <i class='bx bx-stats' ></i>
            <span class="links_name">Etats</span>
        </a>
        </li>
        <li>
            <a href="{{url('/contact')}}">
                <i class='bx bx-chat ' ></i>
                <span class="links_name">Contacts</span>
            </a>
        </li>
        <li>
            <a href="{{url('/profile_admin')}}">
                <i class='bx bx-group' ></i>
                <span class="links_name">Utilisatrices</span>
            </a>
        </li>
        {{-- <li>
            <a href="#">
                <i class='bx bx-group' ></i>
            <span class="links_name">Users</span>
            </a>
        </li> --}}
        {{-- <li>
        <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">BLs</span>
        </a>
        </li> --}}
        {{-- <li>
        <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Details BL</span>
        </a>
        </li> --}}

    </ul>
</div>
<section class="home-section">
    <nav>
    <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">@yield('title')</span>
    </div>
    <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
    </div>
    <div  >
        @if (Route::has('login'))
                    @auth
                    {{-- <img  src="{{asset('build/assets/images/man.png')}}" alt=""> --}}
                    <span class="admin_name">  @include('layouts.admin_navigation')</span>
                        {{-- <span class="admin_name"><a href="{{ url('/dashboard') }}" >{{ Auth::user()->name }}</a></span> --}}
                    @else
                        <span class="login"><a href="{{ route('login') }}" >Log in</a></span>
                        @if (Route::has('register'))
                        <span class="register"><a href="{{ route('register') }}" >Register</a></span>
                        @endif
                    @endauth
            @endif

    </div>
    </nav>
    {{-- success start --}}
    @if(session('success'))
        <div class="alert alert-success">
        {{ session('success') }}
        </div>
    @endif
    {{-- success end --}}

    @yield('Content')
</section>

<script src="{{asset('assets/js/admin.js')}}">

</script>

</body>
</html>
