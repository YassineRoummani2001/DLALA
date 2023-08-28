@extends('layouts.main_admin')
@section('Content')
<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <i class='bx bx-left-arrow-alt left'></i>
            <div class="right">
              <a href="{{url('categorie_admin')}}"  class="box-topic">Categories</a>
            </div>
          </div>
        </div>
    <form method="POST" action="{{url('categorie_admin')}}" enctype="multipart/form-data" class="create-form " >
        @csrf
        <label for="categorie">Ctegorie :</label><br>
        <input type="text" id="categorie" name="categorie" class="input-create" placeholder="Ctegorie"/>
        <label for="photo">Photo :</label><br>
        <input type="file" id="photo" name="photo" class="input-create" />
        <label for="active">Active :</label><br>
        <input type="checkbox" id="active" name="active" checked value="1" /> <br>
        <button type="submit">Add</button>

    </form>

</div>
@endsection
@section('title','Add categories')
