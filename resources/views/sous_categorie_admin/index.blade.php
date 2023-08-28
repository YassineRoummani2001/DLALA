@extends('layouts.main_admin')
@section('Content')

<div class="home-content">
    <div class="overview-boxes">
    <div class="box">
        <div class="right">
          <a href='{{url('/sous_categorie_admin/create')}}'  class="box-topic">Add Sous Categorie</a>
        </div>
        <i class='bx bx-plus plus'></i>
      </div>
    </div>
    <div class="sales-boxes">
        <div class="recent-sales box">
        <div class="title">Sous Categories </div>
        <div class="sales-details">
            <ul class="details">
                <li class="topic-li">Photo</li>
                @foreach ($sous_categories as $sous_categorie)
                <li class="topic"><img src="{{asset('assets/uploads/sous_categories/'.$sous_categorie->photo)}}" width="30" height="30" /></li>
                @endforeach
            </ul>
            <ul class="details">
                <li class="topic-li">Sous Categorie</li>
                @foreach ($sous_categories as $sous_categorie)
                <li class="topic">{{$sous_categorie->sous_categorie}}</li>
                @endforeach
            </ul>
            {{-- <ul class="details">
                <li class="topic-li">Categorie</li>
                @foreach ($sous_categories as $sous_categorie)
                <li class="topic">{{$sous_categorie->categorie->categorie}}</li>
                @endforeach
            </ul> --}}
            <ul class="details">
                <li class="topic-li">Active</li>
                @foreach ($sous_categories as $sous_categorie)
                <li class="topic">
                    <input type="checkbox" class="checkbox" value="{{$sous_categorie->active}}"
                        @php
                        if($sous_categorie->active === 1){
                            echo ("checked = 'checked'");
                        }
                        @endphp
                    />
                </li>
                @endforeach
            </ul>
            <ul class="details">
                <li class="topic-li">Action</li>
                @foreach ($sous_categories as $sous_categorie)
                <form action="{{ url('sous_categorie_admin/' . $sous_categorie->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <a class="edit" href="{{ url('sous_categorie_admin/' . $sous_categorie->id . '/edit') }}" >
                        <i class='bx bx-edit '></i>
                    </a>
                    <a class="show" href="{{ url('sous_categorie_admin/' . $sous_categorie->id . '/show') }}"  >
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
@section('title' , 'Sous Categories')
