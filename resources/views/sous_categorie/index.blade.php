@extends('Home.index')
@section('sous_categorie')
{{-- <div class="container-fluid pt-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Les Categories</span></h2>
  <div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                @foreach ($sous_categories as $sous_categorie)
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{asset('assets/uploads/sous_categories/'.$sous_categorie->photo)}}" style="width: 100px; height: 100px;" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>{{$sous_categorie->sous_categorie}}</h6>
                            <small class="text-body">{{$sous_categorie->categorie->categorie}}</small>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div> --}}

<div class="col-lg-3 d-none d-lg-block">
    <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
        <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Toutes Categories</h6>
        <i class="fa fa-angle-down text-dark"></i>
    </a>
    <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
        <div class="navbar-nav w-100">
            <div class="nav-item dropdown dropright">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dresses <i class="fa fa-angle-right float-right mt-1"></i></a>
                <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                    <a href="" class="dropdown-item">Men's Dresses</a>
                    <a href="" class="dropdown-item">Women's Dresses</a>
                    <a href="" class="dropdown-item">Baby's Dresses</a>
                </div>
            </div>
            <a href="{{url('/annonce')}}" class="nav-item nav-link"><img src="{{asset('assets/img/phone-tablet-and-laptop.png')}}" height="20" width="20" style="color: " > &nbsp; INFORMATIQUE </a>
            {{-- <a href="{{url('/annonce')}}" class="nav-item nav-link"><img src="{{asset('assets/img/travelling-vehicles-of-a-road.png')}}" height="20" width="20" > &nbsp;VEHICULES</a>
            <a href="{{url('/annonce')}}" class="nav-item nav-link"><img src="{{asset('assets/img/real-estate.png')}}" height="20" width="20" > &nbsp;IMMOBILIER</a>
            <a href="{{url('/annonce')}}" class="nav-item nav-link"><img src="{{asset('assets/img/home.png')}}" height="20" width="20" > &nbsp;LA MAISON ET JARDIN</a>
            <a href="{{url('/annonce')}}" class="nav-item nav-link"><img src="{{asset('assets/img/electric-appliance.png')}}" height="20" width="20" > &nbsp;APPAREILS MENAGERS</a>
            <a href="{{url('/annonce')}}" class="nav-item nav-link"><img src="{{asset('assets/img/gown.png')}}" height="20" width="20" > &nbsp;HABILLEMENT</a>
            <a href="{{url('/annonce')}}" class="nav-item nav-link"><img src="{{asset('assets/img/skate.png')}}" height="20" width="20" > &nbsp;LOISIRS</a>
            <a href="{{url('/annonce')}}" class="nav-item nav-link"><img src="{{asset('assets/img/customer-service.png')}}" height="20" width="20" > &nbsp;SERVICES</a>
            <a href="{{url('/annonce')}}" class="nav-item nav-link"><img src="{{asset('assets/img/company.png')}}" height="20" width="20" > &nbsp;ENTREPRISES</a>
            <a href="{{url('/annonce')}}" class="nav-item nav-link"><img src="{{asset('assets/img/mace.png')}}" height="20" width="20" > &nbsp;VENTE EN DOUANE</a>
            <a href="{{url('/annonce')}}" class="nav-item nav-link"><img src="{{asset('assets/img/more-information.png')}}" height="20" width="20" > &nbsp;AUTRES</a> --}}
        </div>
    </nav>
</div>

@endsection
