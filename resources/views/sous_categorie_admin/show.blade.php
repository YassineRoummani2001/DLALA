@extends('layouts.main_admin')
@section('Content')
<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <i class='bx bx-left-arrow-alt left'></i>
            <div class="right">
                <a href='{{url('/sous_categorie_admin')}}'  class="box-topic">Sous Categories</a>
            </div>
        </div>
        </div>

        <div class="overview-show">
        <div class="box">
            <div class="show">
                <span class="designation" >{{$sous_categorie->sous_categorie}} </span><br>
                <span class="star" > {{$sous_categorie->categorie->categorie}}</span><br>
                <img src="{{asset('assets/uploads/sous_categories/'.$sous_categorie->photo)}}" width="200" height="200"/>
                <span class="etat" > {{$sous_categorie->created_at}}</span><br>

            </div>
        </div>
        </div>
</div>
@endsection
@section('title','Show sous categorie')
