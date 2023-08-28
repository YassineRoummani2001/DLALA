@extends('Home.index')
@php
    use App\Models\Categorie ;
@endphp
@section('sous_categorie')

@php
$categories = Categorie::all();
@endphp

<div class="col-lg-3 d-none d-lg-block" style="">
    <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
<h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Toutes Categories</h6>
<i class="fa fa-angle-down text-dark"></i>
</a>
<nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
<div class="navbar-nav w-100">
        @foreach ($categories as $categorie )
        <a href="{{url('/annonce')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <img src="{{asset('assets/uploads/categories/'.$categorie->photo)}}" height="20" width="20" alt="">
            &nbsp;{{$categorie->categorie}}
            <i class="fa fa-angle-right float-right mt-1"></i>
        </a>
        @endforeach
        {{-- @foreach ($sous_categories as $sous_categorie)  <div class="nav-item dropdown dropright">
                        <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                            <a href="" class="dropdown-item">{{$sous_categorie->sous_categorie}}</a>
                        </div>
        @endforeach --}}


</div>
</nav>
</div>
<div class="container-fluid pt-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Les Sous Categories</span></h2>
  <div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                @foreach ($sous_categories as $sous_categorie)
                <div class="cat-item d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="{{asset('assets/uploads/sous_categories/'.$sous_categorie->photo)}}" style="width: 150px; height: 150px;" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>{{$sous_categorie->sous_categorie}}</h6>
                        {{-- <small class="text-body">{{$sous_categorie->categorie->categorie}}</small> --}}
                    </div>
                </div>
            @endforeach
        </div>
            </div>
        </div>
    </div>
</div>



@endsection
