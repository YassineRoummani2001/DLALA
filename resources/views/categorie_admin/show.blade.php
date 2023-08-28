@extends('layouts.main_admin')
@section('Content')
<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <i class='bx bx-left-arrow-alt left'></i>
            <div class="right">
                <a href='{{url('/categorie_admin')}}'  class="box-topic">Categorie</a>
            </div>
        </div>
        </div>

        <div class="overview-show">
        <div class="box">
            <div class="show">
                <span class="designation" >{{$categorie->categorie}} </span><br>
                <img src="{{asset('assets/uploads/categories/'.$categorie->photo)}}" width="200" height="200"/>
                <span class="etat" > {{$categorie->created_at}}</span><br>

            </div>
        </div>
        </div>
</div>
@endsection
@section('title','Show Categorie')
