@extends('layouts.main_admin')
@section('Content')
<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <i class='bx bx-left-arrow-alt left'></i>
            <div class="right">
              <a href="{{url('etat_admin')}}"  class="box-topic">Etats</a>
            </div>
          </div>
        </div>
    <form method="POST" action="{{url('etat_admin')}}" enctype="multipart/form-data" class="create-form " >
        @csrf
        <label for="etat">Etat :</label><br>
        <input type="text" id="etat" name="etat" class="input-create" placeholder="Etat"/>
        <br>
        <button type="submit">Add</button>

    </form>

</div>
@endsection
@section('title','Add Etat')
