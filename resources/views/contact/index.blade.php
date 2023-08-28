@extends('layouts.main_admin')
@section('Content')

<div class="home-content">
    <div class="sales-boxes">
        <div class="recent-sales box">
        <div class="title">Contacts </div>
        <div class="sales-details">
            <ul class="details">
                <li class="topic-li">Prenom & Nom</li>
                @foreach ($contacts as $contact)
                <li class="topic">{{$contact->user->first_name}} {{$contact->user->name}} </li>
                @endforeach
            </ul>
            <ul class="details">
                <li class="topic-li">Tele</li>
                @foreach ($contacts as $contact)
                <li class="topic">{{$contact->user->tele}}</li>
                @endforeach
            </ul>
            <ul class="details">
                <li class="topic-li">Subject</li>
                @foreach ($contacts as $contact)
                <li class="topic">{{$contact->subject}}</li>
                @endforeach
            </ul>
            <ul class="details">
                <li class="topic-li">Action</li>
                @foreach ($contacts as $contact)
                <form action="{{ url('contact/' . $contact->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <a class="show" href="{{ url('contact/' . $contact->id . '/show') }}"  >
                        <i class='bx bx-show'></i>
                    </a>
                    <a class="trash" type="submit"  onclick="return confirm('Voulez vous vraiment supprimer l\'enregistrement en cours ?')" >
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
@section('title' , 'Contacts')
