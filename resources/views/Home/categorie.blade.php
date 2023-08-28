@extends('Home.index')

@section('categorie')

<div class="container-fluid pt-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Les Categories</span></h2>
  <div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                @foreach ( $categories as $categorie )
                <div class="bg-light p-4">
                    <img src="{{asset('assets/uploads/categories/'.$categorie->photo )}}" alt="">
                    <br>
                    <p class=" text-primary -mb-2" style="text-align: start" >{{$categorie->categorie}}</p>
                    <a class=" text-dark" href="{{url('/annonce')}}">Voir Plus</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>


@endsection
