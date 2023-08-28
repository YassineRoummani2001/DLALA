@extends('layouts.main_admin')
@section('Content')
<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <i class='bx bx-left-arrow-alt left'></i>
            <div class="right">
                <a href='{{url('/categorie_admin')}}'  class="box-topic">Categories</a>
            </div>
        </div>
        </div>
    <form method="POST" action="{{url('categorie_admin/'. $categorie->id )}}"  class="create-form " >
        @method('PUT')
        @csrf
        <label for="categorie">Categorie :</label><br>
        <input type="text" id="categorie" name="categorie" class="input-create" value="{{$categorie->categorie}}" />
        <label for="photo">Photo :</label><br>
        <img src="{{asset('assets/uploads/categories/'.$categorie->photo)}}" height="50" width="50" /><br>
        <input type="file" id="photo" name="photo" class="input-create"  value="{{$categorie->photo}}"  />
        <label for="active">Active :</label><br>
        <input type="checkbox" id="active" name="active"
        @php
        if($categorie->active === 1){
            echo ("checked = 'checked'");
        }
        @endphp
          value="{{$categorie->active}}"  /> <br>
        <button type="submit">Edit</button>
    </form>

</div>
@endsection
@section('title','Edit categorie')
