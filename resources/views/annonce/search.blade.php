@extends('layouts.main')
@section('annonce')

{{-- Search Start --}}
<div class="position-relative text-uppercase mx-xl-auto mb-2 col-11">
    <form action="{{ url('annonce/search') }}" method="GET">
        <div class="input-group">
            <div class="input-group-append">
                <a class="btn-dark text-primary p-1 mr-5 " href="{{url('/annonce')}}" ><i class='fas fa-border-all' style='font-size:26px'></i> </a>
            </div>
            <div class="input-group-append">
                <button type="submit" class="input-group-text bg-transparent text-primary bg-dark">
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <input type="text" name="query" class="form-control"   placeholder="Que recherchez-vous?">
        </div>
    </form>
</div>
{{-- Search End --}}

<!-- Annonces Start -->
<div class="container-fluid pt-3 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Votre Recherche</span></h2>
    <div class="row px-xl-5">
        @if(count($annonces) > 0)
        @foreach ($annonces as $annonce )
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img width="300" height="300" src={{asset('assets/uploads/annonces/'.$annonce->photo1)}} alt="">
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
                        {{-- <p class=" text-decoration-none text-truncate"><i class="fas fa-map-marker-alt text-primary" ></i> &nbsp;{{$annonce->user->adresse}}</p> --}}
                        <p class=" text-decoration-none text-truncate"> <i class="fas fa-clock text-primary" ></i> &nbsp;{{$annonce->created_at}}</p>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <h5 class=" position-relative mx-xl-auto mb-4"><span class="bg-secondary pr-3 text-danger">AUCUNE ANNONCE TROUVÉE <i class="fa fa-spinner fa-spin text-danger" style="font-size:24px"></i></span></h6>
        {{-- <h4 class="section-title position-relative mx-xl-auto mb-4"><span class="bg-secondary pr-3 text-danger">AUCUNE ANNONCE TROUVÉE <i class="fa fa-ban text-danger " style="font-size:48px;" ></i> </span></h6> --}}
    @endif
    </div>
</div>
<!-- Annonces End -->


@endsection
