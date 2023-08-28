@extends('layouts.main_admin')
@section('Content')
<div class="home-content">
        <div class="sales-boxes">
        <div class="recent-sales box">
            <div class="title">
                Hi <span>{{ Auth::user()->name }} {{ Auth::user()->first_name }} </span>!
                <img src="{{asset('assets/img/all-icons.gif')}}"/>
            </div>
        </div>
            <div class="recent-sales box">
            <span>Nom : </span><div class="title">  {{ Auth::user()->name}}</div>
            <span>Prenom : </span><div class="title">  {{ Auth::user()->first_name}}</div>
            <span> Email : </span><div class="title"> {{ Auth::user()->email }}</div>
            <span> Adresse : </span><div class="title"> {{ Auth::user()->adresse }}</div>
            <span> Ville : </span><div class="title"> {{ Auth::user()->ville }}</div>
            <span> Tele : </span><div class="title">{{ Auth::user()->tele }}</div>
        </div>
        </div>
</div>

@endsection
@section('title' , 'Admin')
