<?php

namespace App\Http\Controllers;

use App\Models\SousCategorie;
use Illuminate\Http\Request;
use App\Http\Requests\Updatesous_categorieRequest;

class SousCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Home.sous_categorie',['sous_categories'=>SousCategorie::all()]);
    }
    public function admin_index()
    {
        return view('sous_categorie_admin.index',['sous_categories'=>SousCategorie::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sous_categorie_admin.create') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storesous_categorieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('assets/uploads/sous_categories/',$fileName);
        }
        $sous_categorie=new SousCategorie();
        $sous_categorie->sous_categorie=$request->sous_categorie;
        $sous_categorie->categorie_id=$request->categorie_id;
        $sous_categorie->photo = $fileName;
        $sous_categorie->active=$request->active;
        $sous_categorie->save();
        return redirect()->route('sous_categorie_admin.index')->with('success','sous_categorie ajoutee avec success ...');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sous_categorie  $sous_categorie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sous_categorie=SousCategorie::find($id);
        return view('sous_categorie_admin.show',['sous_categorie'=>$sous_categorie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sous_categorie  $sous_categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sous_categorie=SousCategorie::find($id);
        return view('sous_categorie_admin.edit',['sous_categorie'=>$sous_categorie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatesous_categorieRequest  $request
     * @param  \App\Models\sous_categorie  $sous_categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Updatesous_categorieRequest $request, SousCategorie $id)
    {
        $sous_categorie = $request->validate([
            'sous_categorie' => 'required',
            'categorie_id' => 'required',
        ]);
        $sous_categorie=SousCategorie::find($id);
        $sous_categorie->sous_categorie=$request->sous_categorie;
        $sous_categorie->categorie_id=$request->categorie_id;
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('assets/uploads/sous_categories/',$fileName);
        }
        $sous_categorie->photo = $fileName;
        $sous_categorie->active=$request->active;
        $sous_categorie->save();
        //$famille->update($request->all());
        return redirect()->route('sous_categorie_admin.index')->with('success','sous_categorie update avec success ...') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sous_categorie  $sous_categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sous_categorie=SousCategorie::find($id);
        $sous_categorie->delete();
        return redirect()->route('sous_categorie_admin.index')->with('success','sous categorie supprimer avec success ...') ;
    }
}
