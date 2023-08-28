@extends('layouts.main_admin')
@section('Content')
<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <i class='bx bx-left-arrow-alt left'></i>
            <div class="right">
                <a href='{{url('/annonce_admin')}}'  class="box-topic">Annonces</a>
            </div>
        </div>
        </div>

        <div class="overview-show">
        <div class="box">
            <div class="show">
                <img src="{{asset('assets/uploads/annonces/'.$annonce->photo1)}}" width="100" height="100"/>
                <img src="{{asset('assets/uploads/annonces/'.$annonce->photo2)}}" width="100" height="100"/>
                <img src="{{asset('assets/uploads/annonces/'.$annonce->photo3)}}" width="100" height="100"/>
                <img src="{{asset('assets/uploads/annonces/'.$annonce->photo4)}}" width="100" height="100"/>
            </div>
        </div>
        <div class="box">
            <div class="show">
                <span class="designation" >{{$annonce->designation}} </span><br>
                <span> {{$annonce->user->first_name}} {{$annonce->user->name}}</span><br>
                <span>{{$annonce->user->email}}</span><br>
                <span>{{$annonce->user->tele}}</span><br>
                <span>{{$annonce->prix}} DH </span><br>
                <span>{{$annonce->user->ville}}</span><br>
                <span>{{$annonce->user->adresse}}</span><br>
                <span class="etat">{{$annonce->etat->etat}}</span><br>
                <span class="dif">{{$annonce->description}}</span>

            </div>
        </div>
        </div>
</div>
@endsection
@section('title','Show Annonce')
