@extends('layouts.main_admin')
@section('Content')
<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <i class='bx bx-left-arrow-alt left'></i>
            <div class="right">
                <a href='{{url('/etat_admin')}}'  class="box-topic">Etats</a>
            </div>
        </div>
        </div>
    <form method="POST" action="{{url('etat_admin/'. $etat->id )}}"  class="create-form " >
        @method('PUT')
        @csrf
        <label for="etat">Etat :</label><br>
        <input type="text" id="etat" name="etat" class="input-create" value="{{$etat->etat}}" />
        <br>
        <button type="submit">Edit</button>
    </form>

</div>
@endsection
@section('title','Edit Etat')
