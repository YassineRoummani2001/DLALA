<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCategorieRequest;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('Home.categorie',['categories'=>Categorie::all()]);
    }
    public function admin_index()
    {
        return view('categorie_admin.index',['categories'=>Categorie::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorie_admin.create') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategorieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorie = $request->validate([
            'categorie' => 'required',
        ]);

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('assets/uploads/categories/',$fileName);
        }
        $categorie=new Categorie();
        $categorie->categorie=$request->categorie;
        $categorie->photo = $fileName;
        $categorie->active=$request->active;
        $categorie->save();
        return redirect()->route('categorie_admin.index')->with('success','categorie ajoutee avec success ...');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie=Categorie::find($id);
        return view('categorie_admin.show',['categorie'=>$categorie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie=Categorie::find($id);
        return view('categorie_admin.edit',['categorie'=>$categorie]);
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
        $categorie=Categorie::find($id);
        $categorie->categorie=$request->categorie;
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('assets/uploads/categories/',$fileName);
        }
        $categorie->photo = $fileName;
        $categorie->active=$request->active;
        $categorie->save();
        $categorie->update($request->all());
        return redirect()->route('categorie_admin.index')->with('success','categorie update avec success ...') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $categorie=Categorie::find($id);
        $categorie->delete();
        return redirect()->route('categorie_admin.index')->with('success','categorie supprimer avec success ...') ;
    }
}
