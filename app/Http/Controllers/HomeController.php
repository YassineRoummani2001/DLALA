<?php


namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Annonce;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCategorieRequest;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('annonce.index_home',['annonces'=>Annonce::all()]);
        // return view('Home.categorie',['categories'=>Categorie::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategorieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $annonce=Annonce::find($id);
        return view('annonce.show',['annonce'=>$annonce]);
    }

    public function share( $id)
    {
        $annonce=Annonce::find($id);
        return view('annonce.share',['annonce'=>$annonce]);
    }

    public function cart( $id)
    {
        $annonce=Annonce::find($id);
        return view('annonce.cart',['annonce'=>$annonce]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorieRequest  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategorieRequest $request, Categorie $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        //
    }
}
