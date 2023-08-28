@extends('layouts.main_admin')
@section('Content')

<div class="home-content">
    {{-- <div class="overview-boxes">
    <div class="box">
        <div class="right">
          <a href='{{url('/admin_user/create')}}'  class="box-topic">Add user</a>
        </div>
        <i class='bx bx-plus plus'></i>
      </div>
    </div> --}}
    <div class="sales-boxes">
        <div class="recent-sales box">
        <div class="title">Users </div>
        <div class="sales-details">
            <ul class="details">
                <li class="topic-li">Photo</li>
                @foreach ($users as $user)
                <li class="topic"><img src="{{asset('assets/img/account.png')}}" width="30" height="30" /></li>
                @endforeach
            </ul>
            <ul class="details">
                <li class="topic-li">Prenom</li>
                @foreach ($users as $user)
                <li class="topic">{{$user->first_name}}</li>
                @endforeach
            </ul>
            <ul class="details">
                <li class="topic-li">Nom</li>
                @foreach ($users as $user)
                <li class="topic">{{$user->name}}</li>
                @endforeach
            </ul>
            <ul class="details">
                <li class="topic-li">Email</li>
                @foreach ($users as $user)
                <li class="topic">{{$user->email}}</li>
                @endforeach
            </ul>
            <ul class="details">
                <li class="topic-li">Is Admin</li>
                @foreach ($users as $user)
                <li class="topic">
                    <input type="checkbox" class="checkbox" value="{{$user->isAdmin}}"
                        @php
                        if($user->isAdmin === 1){
                            echo ("checked = 'checked'");
                        }
                        @endphp
                    />
                </li>
                @endforeach
            </ul>
            <ul class="details">
                <li class="topic-li">Active</li>
                @foreach ($users as $user)
                <li class="topic">
                    <input type="checkbox" class="checkbox" value="{{$user->active}}"
                        @php
                        if($user->active === 1){
                            echo ("checked = 'checked'");
                        }
                        @endphp
                    />
                </li>
                @endforeach
            </ul>
        </div>
           <div class="button">
            <a href="#">See All</a>
            </div>
        </div>

    </div>
</div>

@endsection
@section('title' , 'Utilisatrices')
