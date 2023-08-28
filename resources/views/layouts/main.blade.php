<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>DLALA</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="Free HTML Templates" name="keywords">
<meta content="Free HTML Templates" name="description">

<!-- Favicon -->
<link href="{{asset('assets/Logo/Logo_D_1.png')}}" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}

<!-- Libraries Stylesheet -->
<link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body onload="myFunction()">
    <div id="loading"></div>
<!-- Topbar Start -->
<div class="container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center h-100">
                <a class="text-body mr-3" href="{{url('/contact/create')}}">About</a>
                <a class="text-body mr-3" href="{{url('/contact/create')}}">Contact</a>
                <a class="text-body mr-3" href="{{url('/contact/create')}}">Help</a>
                <a class="text-body mr-3" href="{{url('/contact/create')}}">FAQs</a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <div class="btn-group">

                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-user text-primary" style="font-size: 20px"></i>&nbsp;&nbsp; SE CONNECTER
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        @if (Route::has('login'))
                        @auth
                        <span class="admin_name">  @include('layouts.navigation')</span>
                        @else
                            <button class="dropdown-item"><a href="{{ route('login') }}" ><i class="fas fa-sign-in-alt text-dark"></i>&nbsp; &nbsp; Log in</a></button>
                            @if (Route::has('register'))
                            <button  class="dropdown-item"><a href="{{ route('register') }}" ><i class="fas fa-user-plus text-dark"></i>&nbsp; &nbsp; Register</a></button>
                            @endif
                        @endauth
                @endif
                    </div>
                </div>
                <div class="btn-group mx-2">
                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">MAD</button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item" type="button">USD</button>
                        <button class="dropdown-item" type="button">EUR</button>
                        <button class="dropdown-item" type="button">GBP</button>
                        <button class="dropdown-item" type="button">CAD</button>
                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">FR</button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item" type="button">EN</button>
                        <button class="dropdown-item" type="button">AR</button>
                        <button class="dropdown-item" type="button">RU</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
        <div class="col-lg-4">
            <a href="{{url('/')}}" class="text-decoration-none">
                <span class="h1 text-uppercase text-primary bg-dark px-2"><img  src="{{asset('assets/Logo/Logo_name_DLALA_1.png')}}"></span>
                {{-- <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1"><img src="{{asset('assets/Logo/Logo_D_1.png')}}"></span> --}}
            </a>
        </div>
        <div class="col-lg-4 col-6 text-left">
            <form action="{{ url('annonce/search') }}" method="GET">
                <div class="input-group">
                    <input type="text" name="query" class="form-control"   placeholder="Que recherchez-vous?">
                    <div class="input-group-append">
                        <button type="submit" class="input-group-text bg-transparent text-primary bg-dark">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

        </div>
        <div class="col-lg-4 col-6 text-right">
            <p class="m-0">Customer Service</p>
            <h5 class="m-0">+212 606 203862</h5>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Toutes Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                <div class="navbar-nav w-100">
                    <div class="nav-item dropdown dropright">
                        <a href="{{url('/annonce')}}"  class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="{{asset('assets/img/phone-tablet-and-laptop.png')}}" height="20" width="20" style="color: " > &nbsp; INFORMATIQUE <i class="fa fa-angle-right float-right mt-1"></i> </a>
                        <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/infor1.png')}}" height="20" width="20" >&nbsp; TÉLÉPHONES </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/infor2.png')}}" height="20" width="20" >&nbsp; TABLETTES </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/infor3.png')}}" height="20" width="20" >&nbsp; ORDINATEURS PORTABLES </a>
                            <a href="" class="dropdown-item"><img src="{{asset('assets/img/infor4.png')}}" height="20" width="20" >&nbsp; ORDINATEURS BUREAU</a>
                            <a href="" class="dropdown-item"><img src="{{asset('assets/img/infor5.png')}}" height="20" width="20" >&nbsp; ACCESSOIRES INFORMATIQUE </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/infor6.png')}}" height="20" width="20" >&nbsp; JEUX VIDÉO & CONSOLES </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/infor7.png')}}" height="20" width="20" >&nbsp; CAMÉRAS </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/infor8.png')}}" height="20" width="20" >&nbsp; TÉLÉVISIONS </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/infor9.png')}}" height="20" width="20" >&nbsp; IMAGE & SON</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown dropright" >
                        <a href="{{url('/annonce')}}"  class="nav-link dropdown-toggle" data-toggle="dropdown" ><img src="{{asset('assets/img/travelling-vehicles-of-a-road.png')}}" height="20" width="20" style="color: " > &nbsp; VEHICULES <i class="fa fa-angle-right float-right mt-1"></i> </a>
                        <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/vihicule1.png')}}" height="20" width="20" >&nbsp; VOITURES D'OCCASION</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/vihicule2.png')}}" height="20" width="20" >&nbsp; LOCATION DE VOITURES </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/vihicule3.png')}}" height="20" width="20" >&nbsp; AUTO NEUF </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/vihicule4.png')}}" height="20" width="20" >&nbsp; ACCESSOIRES POUR VÉHICULES</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/vihicule5.png')}}" height="20" width="20" >&nbsp; MOTOS </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/vihicule6.png')}}" height="20" width="20" >&nbsp; VÉLOS </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/vihicule7.png')}}" height="20" width="20" >&nbsp; ENGINS BTP </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/vihicule8.png')}}" height="20" width="20" >&nbsp; ENGINS AGRICOLE </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/vihicule9.png')}}" height="20" width="20" >&nbsp; REMORQUES ET CARAVANES</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/vihicule10.png')}}" height="20" width="20" >&nbsp; CAMIONS </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/vihicule11.png')}}" height="20" width="20" >&nbsp; BATEAUX </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/vihicule12.png')}}" height="20" width="20" >&nbsp; AUTRES VÉHICULES</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown dropright">
                        <a href="{{url('/annonce')}}"  class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="{{asset('assets/img/real-estate.png')}}" height="20" width="20" style="color: " > &nbsp; IMMOBILIER <i class="fa fa-angle-right float-right mt-1"></i> </a>
                        <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/imm1.png')}}" height="20" width="20" >&nbsp; APPARTEMENTS</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/imm2.png')}}" height="20" width="20" >&nbsp; MAISONS ET VILLAS </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/imm3.png')}}" height="20" width="20" >&nbsp; IMMO NEUF</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/imm4.png')}}" height="20" width="20" >&nbsp; BUREAUX ET PLATEAUX</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/imm5.png')}}" height="20" width="20" >&nbsp; LOCATIONS DE VACANCES </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/imm6.png')}}" height="20" width="20" >&nbsp; MAGASINS, COMMERCES </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/imm7.png')}}" height="20" width="20" >&nbsp; COLOCATIONS </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/imm8.png')}}" height="20" width="20" >&nbsp; TERRAINS ET FERMES </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/imm9.png')}}" height="20" width="20" >&nbsp; AUTRE IMMOBILIER</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown dropright">
                        <a href="{{url('/annonce')}}"  class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="{{asset('assets/img/home.png')}}" height="20" width="20" style="color: " > &nbsp; LA MAISON ET JARDIN <i class="fa fa-angle-right float-right mt-1"></i> </a>
                        <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/mj1.png')}}" height="20" width="20" >&nbsp; ELECTROMÉNAGER </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/mj2.png')}}" height="20" width="20" >&nbsp; MEUBLES ET DÉCORATION </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/mj3.png')}}" height="20" width="20" >&nbsp; JARDIN ET OUTILS DE</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown dropright">
                        <a href="{{url('/annonce')}}"  class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="{{asset('assets/img/hab1.png')}}" height="20" width="20" style="color: " > &nbsp; HABILLEMENT <i class="fa fa-angle-right float-right mt-1"></i> </a>
                        <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/hab1.png')}}" height="20" width="20" >&nbsp; VÊTEMENTS </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/hab2.png')}}" height="20" width="20" >&nbsp; CHAUSSURES </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/hab3.png')}}" height="20" width="20" >&nbsp; MONTRES ET BIJOUX</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/hab4.png')}}" height="20" width="20" >&nbsp;  SACS ET ACCESSOIRES</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/hab5.png')}}" height="20" width="20" >&nbsp;  VÊTEMENTS POUR BÉBÉ</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/hab6.png')}}" height="20" width="20" >&nbsp; EQUIPEMENTS POUR BÉBÉ</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/hab7.png')}}" height="20" width="20" >&nbsp; PRODUITS DE BEAUTÉ</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown dropright">
                        <a href="{{url('/annonce')}}"  class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="{{asset('assets/img/skate.png')}}" height="20" width="20" style="color: " > &nbsp; LOISIRS <i class="fa fa-angle-right float-right mt-1"></i> </a>
                        <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/loi1.png')}}" height="20" width="20" >&nbsp; SPORTS ET LOISIRS</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/loi2.png')}}" height="20" width="20" >&nbsp; ANIMAUX</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/loi3.png')}}" height="20" width="20" >&nbsp; INSTRUMENTS DE MUSIQUE</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/loi4.png')}}" height="20" width="20" >&nbsp;  ART ET COLLECTIONS</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/loi5.png')}}" height="20" width="20" >&nbsp;  VOYAGES ET BILLETTERIE</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/loi6.png')}}" height="20" width="20" >&nbsp; FILMS, LIVRES, MAGAZINES</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown dropright">
                        <a href="{{url('/annonce')}}"  class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="{{asset('assets/img/customer-service.png')}}" height="20" width="20" style="color: " > &nbsp; SERVICES <i class="fa fa-angle-right float-right mt-1"></i> </a>
                        <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/emp1.png')}}" height="20" width="20" >&nbsp;OFFRES D'EMPLOI </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/emp2.png')}}" height="20" width="20" >&nbsp; OFFRES DE STAGES</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/emp3.png')}}" height="20" width="20" >&nbsp; CENTRE D'APPELS</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/emp4.png')}}" height="20" width="20" >&nbsp; CADRES</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/emp5.png')}}" height="20" width="20" >&nbsp; MÉTIERS IT</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/emp6.png')}}" height="20" width="20" >&nbsp; FEMMES DE MÉNAGES, NOUNOUS ET CHAUFFEURS</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/emp7.png')}}" height="20" width="20" >&nbsp; TRAVAUX DE MAISON</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/emp8.png')}}" height="20" width="20" >&nbsp; DEMANDES D'EMPLOI</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/emp9.png')}}" height="20" width="20" >&nbsp; SERVICES</a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/emp10.png')}}" height="20" width="20" >&nbsp; COURS ET FORMATIONS</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown dropright">
                        <a href="{{url('/annonce')}}"  class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="{{asset('assets/img/company.png')}}" height="20" width="20" style="color: " > &nbsp; ENTREPRISES<i class="fa fa-angle-right float-right mt-1"></i> </a>
                        <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/entr1.png')}}" height="20" width="20" >&nbsp; BUSINESS ET AFFAIRES COMMERCIALES </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/entr2.png')}}" height="20" width="20" >&nbsp; MATÉRIELS PROFESSIONNELS </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/entr3.png')}}" height="20" width="20" >&nbsp; STOCKS ET VENTE EN GROS</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown dropright">
                        <a href="{{url('/annonce')}}"  class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="{{asset('assets/img/mace.png')}}" height="20" width="20" style="color: " > &nbsp; VENTE EN DOUANE<i class="fa fa-angle-right float-right mt-1"></i> </a>
                        <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/vente1.png')}}" height="20" width="20" >&nbsp; VÉHICULES </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/vente2.png')}}" height="20" width="20" >&nbsp; IMMOBILIER </a>
                            <a href="{{url('/annonce')}}" class="dropdown-item"><img src="{{asset('assets/img/vente3.png')}}" height="20" width="20" >&nbsp; DIVERS</a>
                        </div>
                    </div>
                    {{-- <a href="{{url('/annonce')}}" class="nav-item nav-link"><img src="{{asset('assets/img/more-information.png')}}" height="20" width="20" > &nbsp;AUTRES</a> --}}
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="{{url('/')}}" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-dark px-0 w-48 h-50 "><img style="width: 20%; height: 20%;" src="{{asset('assets/Logo/Logo_D_1.png')}}" ></span>
                    {{-- <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span> --}}
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{url('/')}}" class="nav-item nav-link ">Accueil</a>
                        <a href="{{url('/contact/create')}}" class="nav-item nav-link">Contact</a>
                        <a href="{{url('/annonce')}}" class="nav-item nav-link ">Annonces</a>
                        <a href="{{url('/annonce/create')}}" class="nav-item nav-link active"><i class="fas fa-plus text-primary"></i> Deposer Une Annonce</a>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->

<!-- Content Start -->
<div class=" container-fluid ">
    @yield('content')
</div>
<!-- Content End -->

<!-- Annonce Start -->
<div class="container-fluid ">
    @yield('annonce')
</div>
<div class="container-fluid ">
    @yield('show')
</div>
<!-- Annonce End -->

<!-- Footer Start -->
<div class="container-fluid bg-dark text-secondary mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
            <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum tempor no vero est magna amet no</p>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Ain Chggag, Fes, Morocco</p>
            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>www.DLALA.com</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+212 606 203862</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="{{url('/')}}"><i class="fa fa-angle-right mr-2"></i>Accueil</a>
                        <a class="text-secondary mb-2" href="{{url('/')}}"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                        <a class="text-secondary mb-2" href="{{url('/')}}"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                        <a class="text-secondary mb-2" href="{{url('/')}}"><i class="fa fa-angle-right mr-2"></i>Shopping</a>
                        <a class="text-secondary mb-2" href="{{url('/')}}"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                        <a class="text-secondary" href="{{url('/contact/create')}}"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="{{url('/')}}"><i class="fa fa-angle-right mr-2"></i>Accueil</a>
                        <a class="text-secondary mb-2" href="{{url('/')}}"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                        <a class="text-secondary mb-2" href="{{url('/')}}"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                        <a class="text-secondary mb-2" href="{{url('/')}}"><i class="fa fa-angle-right mr-2"></i>Shopping</a>
                        <a class="text-secondary mb-2" href="{{url('/')}}"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                        <a class="text-secondary" href="{{url('/contact/create')}}"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                    <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Your Email Address">
                            <div class="input-group-append">
                                <a href="{{ route('login') }}" style="margin-left: 5px"  class=" btn btn-primary">Sign Up</a>
                            </div>
                        </div>
                    </form>
                    <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a style="background: rgb(0, 174, 255) ;" class="btn  btn-primary btn-square mr-2" href="#"><i style=" color:white " class="fab fa-twitter"></i></a>
                        <a style="background: blue ; " class="btn btn-primary btn-square mr-2" href="#"><i style=" color:white " class="fab fa-facebook-f"></i></a>
                        <a style="background: rgb(44, 44, 241) ; " class="btn btn-primary btn-square mr-2" href="#"><i style=" color:white " class="fab fa-linkedin-in"></i></a>
                        <a style=" background: radial-gradient(circle at 33% 100%, #fed373 4%, #f15245 30%, #d92e7f 62%, #9b36b7 85%, #515ecf) ; " class="btn btn-primary btn-square" href="#"><i style=" color:white " class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-secondary">
                &copy; <a class="text-primary" >2023</a>. All Rights Reserved. Designed
                by
                <a class="text-primary" href="{{url('/')}}">DLALA</a>
                <img class="mb-1" src="{{asset('assets/Logo/Logo_DLALA.png')}}" width="20%" height="20%"  >
            </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
            <img class="img-fluid" src="img/payments.png" alt="">
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="{{url('/')}}" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="{{asset('assets/js/main.js')}}"></script>

<script>
    var preloader = document.getElementById("loading");

    function myFunction(){
        preloader.style.display = 'none';
    };
</script>
</body>

</html>
