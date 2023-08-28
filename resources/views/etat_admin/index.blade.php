@extends('layouts.main_admin')
@section('Content')

<div class="home-content">
    <div class="overview-boxes">
    <div class="box">
        <div class="right">
          <a href='{{url('/etat_admin/create')}}'  class="box-topic">Add etat</a>
        </div>
        <i class='bx bx-plus plus'></i>
      </div>
    </div>
    <div class="sales-boxes">
        <div class="recent-sales box">
        <div class="title">etats </div>
        <div class="sales-details">
            <ul class="details">
                <li class="topic-li">etat</li>
                @foreach ($etats as $etat)
                <li class="topic">{{$etat->etat}}</li>
                @endforeach
            </ul>
            <ul class="details">
                <li class="topic-li">Action</li>
                @foreach ($etats as $etat)
                <form action="{{ url('etat_admin /' . $etat->id ) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <a class="edit" href="{{ url('etat_admin/' . $etat->id . '/edit') }}" >
                        <i class='bx bx-edit '></i>
                    </a>
                    <a class="show" href="{{ url('etat_admin/' . $etat->id . '/show') }}"  >
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
@section('title' , 'Etats')
