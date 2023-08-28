@extends('layouts.main')
@section('annonce')


<!-- Breadcrumb Start -->
<div class="container-fluid">
<div class="row px-xl-5">
    <div class="col-12">
        <nav class="breadcrumb bg-light mb-30">
            <a class="breadcrumb-item text-dark" href="{{url('/')}}">Accueil</a>
            <span class="breadcrumb-item active">Demande</span>
        </nav>
    </div>
</div>
</div>
<!-- Breadcrumb End -->

<!-- Cart Start -->
<div class="container-fluid pb-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 mb-30">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner bg-light pl-5 p-3 ">
                    <div class="carousel-item active">
                        <img width="300" height="300"  src="{{asset('assets/uploads/annonces/'.$annonce->photo1)}}" alt="{{asset('assets/img/img-v.jpg')}}">
                    </div>
                    <div class="carousel-item">
                        <img cwidth="300" height="300"  src="{{asset('assets/uploads/annonces/'.$annonce->photo2)}}" alt="{{asset('assets/img/img-v.jpg')}}">
                    </div>
                    <div class="carousel-item">
                        <img cwidth="300" height="300"  src="{{asset('assets/uploads/annonces/'.$annonce->photo3)}}" alt="{{asset('assets/img/img-v.jpg')}}">
                    </div>
                    <div class="carousel-item">
                        <img  width="300" height="300"  src="{{asset('assets/uploads/annonces/'.$annonce->photo4)}}" alt="{{asset('assets/img/img-v.jpg')}}">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-primary"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-primary"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-7 h-auto mb-30">
            <div class="h-100 bg-light p-30">
                <h3>{{$annonce->designation}}</h3>
                <p class="mb-4">{{$annonce->description}}</p>
                <h3 class="font-weight-semi-bold mb-4 text-primary">{{$annonce->prix}} DH</h3>
                <h5 class="font-weight-semi-bold mb-4"> <i class="fas fa-user text-primary" ></i>&nbsp;&nbsp;{{ $annonce->user->first_name }} {{ $annonce->user->name }}</h5>
                <h5 class="font-weight-semi-bold mb-4"> <i class="fas fa-phone-alt text-primary" ></i>&nbsp;&nbsp; {{ $annonce->user->tele }}</h5>
                <h5 class="font-weight-semi-bold mb-4"> <i class="fas fa-envelope text-primary" ></i>&nbsp;&nbsp; {{ $annonce->user->email }}</h5>
                <h5 class="font-weight-semi-bold mb-4"><i class="fas fa-map-marker-alt text-primary" ></i>&nbsp;&nbsp;{{ $annonce->user->ville }} ,{{ $annonce->user->adresse }}</h5>
                <h5 class="font-weight-semi-bold mb-4">Sous Categorie : {{$annonce->sous_categorie->sous_categorie}}</h5>
                <h5 class="font-weight-semi-bold mb-4">Etat : {{$annonce->etat->etat}}</h5>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Cart End -->


@endsection
