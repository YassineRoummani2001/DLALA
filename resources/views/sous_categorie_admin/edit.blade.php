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

    <form method="POST" action="{{url('sous_categorie_admin/'. $sous_categorie.'/edit'  )}}" enctype="multipart/form-data" class="create-form " >
        @method('PUT')
        @csrf
        <label for="categorie_id">Categorie</label>
        <select name="categorie_id" id="categorie_id" class="input-create"  >
            <option value="{{ $sous_categorie->categorie_id }}" >{{ $sous_categorie->categorie->categorie }}</option>
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }}" >{{ $categorie->categorie }}</option>
                @endforeach
        </select>
        <label for="categorie">Sous Ctegorie :</label><br>
        <input type="text" id="sous_categorie" name="sous_categorie" value="{{$sous_categorie->sous_categorie}}"  class="input-create" placeholder="Sous Ctegorie"/>
        <label for="photo">Photo :</label><br>
        <img src="{{asset('assets/uploads/sous_categories/'.$sous_categorie->photo)}}" width="100" height="100" >
        <input type="file" id="photo" name="photo" value="{{$sous_categorie->photo}}"  class="input-create" />
        <label for="active">Active :</label><br>
        <input type="checkbox" id="active" name="active"  checked  value="{{$sous_categorie->active}}"  /> <br>
        <button type="submit">Edit</button>

    </form>

</div>
@endsection
@section('title','Edit Sous Ctegorie')
