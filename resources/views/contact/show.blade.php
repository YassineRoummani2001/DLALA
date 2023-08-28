@extends('layouts.main_admin')
@section('Content')
<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <i class='bx bx-left-arrow-alt left'></i>
            <div class="right">
                <a href='{{url('/contact')}}'  class="box-topic">contacts</a>
            </div>
        </div>
        </div>

        <div class="overview-show">
        <div class="box">
            <div class="show">
                <span class="spn">Prenom & Nom :</span><br>
                <span class="designation"> {{$contact->user->first_name}} {{$contact->user->name}}</span><br>
                <span class="spn">Email :</span><br>
                <span class="etat">{{$contact->user->email}}</span><br>
                <span class="spn">Numéro de téléphone :</span><br>
                <span class="star">{{$contact->user->tele}}</span><br>
                <span class="spn">Subject :</span><br>
                <span class="etat">{{$contact->subject}}</span><br>
                <span class="spn">Message :</span><br>
                <span class="star">{{$contact->message}}</span><br>
                <span class="spn">Date :</span><br>
                <span class="date">{{$contact->created_at}}</span>

            </div>
        </div>
        </div>
</div>
@endsection
@section('title','Show contact')
