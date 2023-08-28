@extends('layouts.main_admin')
@section('Content')

<div class="home-content">
    <div class="sales-boxes">
        <div class="recent-sales box">
        <div class="title">Annonces </div>
        <div class="sales-details">
            <ul class="details">
                <li class="topic-li">Photo 1</li>
                @foreach ($annonces as $annonce)
                <li class="topic"><img src="{{asset('assets/uploads/annonces/'.$annonce->photo1)}}" width="30" height="30" /></li>
                @endforeach
            </ul>
            <ul class="details">
                <li class="topic-li">Designation</li>
                @foreach ($annonces as $annonce)
                <li class="topic">{{$annonce->designation}}</li>
                @endforeach
            </ul>
            <ul class="details">
                <li class="topic-li">Sous Categorie</li>
                @foreach ($annonces as $annonce)
                <li class="topic">{{$annonce->sous_categorie->sous_categorie}}</li>
                @endforeach
            </ul>
            {{-- <ul class="details">
                <li class="topic-li">Prix</li>
                @foreach ($annonces as $annonce)
                <li class="topic">{{$annonce->prix}}</li>
                @endforeach
            </ul> --}}
            <ul class="details">
                <li class="topic-li">Utilisatrice</li>
                @foreach ($annonces as $annonce)
                <li class="topic">{{$annonce->user->first_name}} {{$annonce->user->name}}</li>
                @endforeach
            </ul>
            {{-- <ul class="details">
                <li class="topic-li">Ville</li>
                @foreach ($annonces as $annonce)
                <li class="topic">{{$annonce->user->ville}}</li>
                @endforeach
            </ul> --}}
            {{-- <ul class="details">
                <li class="topic">Date</li>
                @foreach ($annonces as $annonce)
                <li class="topic">{{$annonce->created_at}}</li>
                @endforeach
            </ul> --}}
            {{-- <ul class="details">
                <li class="topic">Active</li>
                @foreach ($annonces as $annonce)
                <li class="topic">
                    <input type="checkbox" value="{{$annonce->active}}"
                        @php
                        if($annonce->active === 1){
                            echo ("checked = 'checked'");
                        }
                        @endphp
                    />
                </li>
                @endforeach
            </ul> --}}
            <ul class="details">
                <li class="topic-li">Action</li>
                @foreach ($annonces as $annonce)
                <form action="{{ url('annonce_admin/' . $annonce->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <a class="show" href="{{ url('annonce_admin/' . $annonce->id . '/show_ad') }}"  >
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
@section('title' , 'Annonces')
