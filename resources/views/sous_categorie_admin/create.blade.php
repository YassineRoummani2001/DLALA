@extends('layouts.main_admin')
@php
    use App\Models\Categorie ;
@endphp
@section('Content')
<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <i class='bx bx-left-arrow-alt left'></i>
            <div class="right">
              <a href="{{url('sous_categorie_admin')}}"  class="box-topic">Sous Ctegories</a>
            </div>
          </div>
        </div>

        @php
            $categories = Categorie::all();
        @endphp

    <form method="POST" action="{{url('sous_categorie_admin')}}" enctype="multipart/form-data" class="create-form " >
        @csrf
        <label for="categorie_id">Categorie</label>
        <select name="categorie_id" id="categorie_id" class="input-create"  >
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->categorie }}</option>
                @endforeach
        </select>
        <label for="categorie">Sous Ctegorie :</label><br>
        <input type="text" id="sous_categorie" name="sous_categorie" class="input-create" placeholder="Sous Ctegorie"/>
        <label for="photo">Photo :</label><br>
        <input type="file" id="photo" name="photo" class="input-create" />
        <label for="active">Active :</label><br>
        <input type="checkbox" id="active" name="active" checked value="1" /> <br>
        <button type="submit">Add</button>

    </form>

</div>
@endsection
@section('title','Add Sous Ctegorie')
