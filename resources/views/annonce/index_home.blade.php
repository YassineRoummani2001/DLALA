@extends('Home.index')
@section('annonce')

<!-- Products Start -->
<div class="container-fluid py-5">
<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Les Annonces</span></h2>
<div class="row px-xl-5">
    <div class="col">
        <div class="owl-carousel related-carousel">
            @foreach ($annonces as $annonce )
            <div class="product-item bg-light">
                <div class="product-img position-relative overflow-hidden">
                    <img width="400" height="300"  src={{asset('assets/uploads/annonces/'.$annonce->photo1)}} alt="" style="background: #fff;" >
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href="{{ url('annonce/' . $annonce->id . '/cart') }}"><i class="fa fa-shopping-cart"></i></a>
                        {{-- <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a> --}}
                        <a class="btn btn-outline-dark btn-square" href="{{ url('annonce/' . $annonce->id . '/show') }}"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-outline-dark btn-square" href="{{ url('annonce/' . $annonce->id . '/share') }}"><i class="fa fa-share-alt "></i></a>
                    </div>
                </div>
                <div class="text-left py-4 ml-3">
                    <h6 class="h6 text-decoration-none text-truncate" >{{$annonce->designation}}</h6>
                    <div class="d-flex align-items-left justify-content-start mt-2">
                        <h5>{{$annonce->prix}} DH</h5>
                    </div>
                        <p class=" text-decoration-none text-truncate"><i class="fas fa-map-marker-alt text-primary" ></i> &nbsp;{{$annonce->user->adresse}}</p>
                        <p class=" text-decoration-none text-truncate"> <i class="fas fa-clock text-primary" ></i> &nbsp;{{$annonce->created_at}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
<!-- Products End -->

<!-- Products Start -->
<div class="container-fluid py-5">
<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"></span></h2>
<div class="row px-xl-5">
    <div class="col">
        <div class="owl-carousel related-carousel">
            @foreach ($annonces as $annonce )
            <div class="product-item bg-light">
            <div class="product-img position-relative overflow-hidden">
                    <img width="400" height="300"  src={{asset('assets/uploads/annonces/'.$annonce->photo1)}} alt="" >
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href="{{ url('annonce/' . $annonce->id . '/cart') }}"><i class="fa fa-shopping-cart"></i></a>
                        {{-- <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a> --}}
                        <a class="btn btn-outline-dark btn-square" href="{{ url('annonce/' . $annonce->id . '/show') }}"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-outline-dark btn-square" href="{{ url('annonce/' . $annonce->id . '/share') }}"><i class="fa fa-share-alt "></i></a>
                    </div>
                </div>
                <div class="text-left py-4 ml-3">
                    <h6 class="h6 text-decoration-none text-truncate" >{{$annonce->designation}}</h6>
                    <div class="d-flex align-items-left justify-content-start mt-2">
                        <h5>{{$annonce->prix}} DH</h5>
                    </div>
                        <p class=" text-decoration-none text-truncate"><i class="fas fa-map-marker-alt text-primary" ></i> &nbsp;{{$annonce->user->adresse}}</p>
                        <p class=" text-decoration-none text-truncate"> <i class="fas fa-clock text-primary" ></i> &nbsp;{{$annonce->created_at}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
<!-- Products End -->

<!-- Products Start -->
<div class="container-fluid py-12">
<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-1"><span class="bg-secondary pr-3"></span></h2>
<div class="row px-xl-5">
    <div class="col">
        <div class="owl-carousel related-carousel">
            @foreach ($annonces as $annonce )
            <div class="product-item bg-light">
                <div class="product-img position-relative overflow-hidden">
                    <img width="400" height="300"  src={{asset('assets/uploads/annonces/'.$annonce->photo1)}} alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href="{{ url('annonce/' . $annonce->id . '/cart') }}"><i class="fa fa-shopping-cart"></i></a>
                        {{-- <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a> --}}
                        <a class="btn btn-outline-dark btn-square" href="{{ url('annonce/' . $annonce->id . '/show') }}"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-outline-dark btn-square" href="{{ url('annonce/' . $annonce->id . '/share') }}"><i class="fa fa-share-alt "></i></a>
                    </div>
                </div>
                <div class="text-left py-4 ml-3">
                    <h6 class="h6 text-decoration-none text-truncate" >{{$annonce->designation}}</h6>
                    <div class="d-flex align-items-left justify-content-start mt-2">
                        <h5>{{$annonce->prix}} DH</h5>
                    </div>
                        <p class=" text-decoration-none text-truncate"><i class="fas fa-map-marker-alt text-primary" ></i> &nbsp;{{$annonce->user->adresse}}</p>
                        <p class=" text-decoration-none text-truncate"> <i class="fas fa-clock text-primary" ></i> &nbsp;{{$annonce->created_at}}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"></span></h2>
</div>
<!-- Products End -->

<!-- Offer Start -->
<div class="container-fluid pt-5 pb-3">
<div class="row px-xl-5">
    <div class="col-md-6">
        <div class="product-offer mb-30" style="height: 300px;">
            <img class="img-fluid" src="{{asset('assets/img/offer-6.jpg')}}" alt="">
            <div class="offer-text">
                <h4 class=" text-primary text-uppercase">Gratuit </h4>
                <h3 class="text-white mb-3">Annoncez Vos Produits Maintenant</h3>
                <a href="{{url('/annonce/create')}}" class="btn btn-primary">Annoncez</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="product-offer mb-30" style="height: 300px;">
            <img class="img-fluid" src="{{asset('assets/img/offer-8.jpg')}}" alt="">
            <div class="offer-text">
                <h4 class=" text-primary text-uppercase">Gratuit </h4>
                <h3 class="text-white mb-3">Annoncez Vos Produits Maintenant</h3>
                <a href="" class="btn btn-primary">Annoncez</a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Offer End -->

<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Les Nouvelles  Annonces</span></h2>
<div class="row px-xl-5">
    @foreach ($annonces as $annonce )
    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
        <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
                <img width="300" height="300"  src="{{asset('assets/uploads/annonces/'.$annonce->photo1)}}" alt="">
                <div class="product-action">
                    <a class="btn btn-outline-dark btn-square" href="{{ url('annonce/' . $annonce->id . '/cart') }}"><i class="fa fa-shopping-cart"></i></a>
                    {{-- <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a> --}}
                    <a class="btn btn-outline-dark btn-square" href="{{ url('annonce/' . $annonce->id . '/show') }}"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-outline-dark btn-square" href="{{ url('annonce/' . $annonce->id . '/share') }}"><i class="fa fa-share-alt "></i></a>
                </div>
            </div>
            <div class="text-left py-4 ml-3">
                <h6 class="h6 text-decoration-none text-truncate" >{{$annonce->designation}}</h6>
                <div class="d-flex align-items-left justify-content-start mt-2">
                    <h5>{{$annonce->prix}} DH</h5>
                </div>
                    <p class=" text-decoration-none text-truncate"><i class="fas fa-map-marker-alt text-primary" ></i> &nbsp;{{$annonce->user->adresse}}</p>
                    <p class=" text-decoration-none text-truncate"> <i class="fas fa-clock text-primary" ></i> &nbsp;{{$annonce->created_at}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"></span></h2>
</div>
<!-- Products End -->

<!-- Vendor Start -->
<div class="container-fluid py-5">
<div class="row px-xl-5">
    <div class="col">
        <div class="owl-carousel vendor-carousel">
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-1.jpg')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-2.jpg')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-3.jpg')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-4.jpg')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-5.jpg')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-6.jpg')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-7.jpg')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-8.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div>
</div>
<!-- Vendor End -->
@endsection
