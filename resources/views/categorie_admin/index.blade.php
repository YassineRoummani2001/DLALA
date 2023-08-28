@extends('layouts.main_admin')
@section('Content')

<div class="home-content">
    <div class="overview-boxes">
    <div class="box">
        <div class="right">
          <a href='{{url('/categorie_admin/create')}}'  class="box-topic">Add categories</a>
        </div>
        <i class='bx bx-plus plus'></i>
      </div>
    </div>
    <div class="sales-boxes">
        <div class="recent-sales box">
        <div class="title">categories </div>
        <div class="sales-details">
            <ul class="details">
                <li class="topic-li">Photo</li>
                @foreach ($categories as $categorie)
                <li class="topic"><img src="{{asset('assets/uploads/categories/'.$categorie->photo)}}" width="30" height="30" /></li>
                @endforeach
            </ul>
            <ul class="details">
                <li class="topic-li">categorie</li>
                @foreach ($categories as $categorie)
                <li class="topic">{{$categorie->categorie}}</li>
                @endforeach
            </ul>
            <ul class="details">
                <li class="topic-li">Active</li>
                @foreach ($categories as $categorie)
                <li class="topic">
                    <input type="checkbox" class="checkbox" value="{{$categorie->active}}"
                        @php
                        if($categorie->active === 1){
                            echo ("checked = 'checked'");
                        }
                        @endphp
                    />
                </li>
                @endforeach
            </ul>
            <ul class="details">
                <li class="topic-li">Action</li>
                @foreach ($categories as $categorie)
                <form action="{{ url('categorie_admin/' . $categorie->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <a class="edit" href="{{ url('categorie_admin/' . $categorie->id . '/edit') }}" >
                        <i class='bx bx-edit '></i>
                    </a>
                    <a class="show" href="{{ url('categorie_admin/' . $categorie->id . '/show') }}"  >
                        <i class='bx bx-show'></i>
                    </a>
                    <a class="trash" type="submit" onclick="return confirm('Voulez vous vraiment supprimer l\'enregistrement en cours ?')" >
                        <i class='bx bx-trash'></i>
                    </a>
                </form>
                <li class="topic">

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
@section('title' , 'Categories')
