@extends('layouts.main_admin')
@section('Content')
<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <i class='bx bx-left-arrow-alt left'></i>
            <div class="right">
                <a href='{{url('/etat_admin')}}'  class="box-topic">Etat</a>
            </div>
        </div>
        </div>

        <div class="overview-show">
        <div class="box">
            <div class="show">
                <span class="etat" >{{$etat->etat}} </span><br>
                <span class="designation" >{{$etat->created_at}} </span><br>
            </div>
        </div>
        </div>
</div>
@endsection
@section('title','Show Etat')
