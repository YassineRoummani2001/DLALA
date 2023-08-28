<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateAnnonceRequest;
use Illuminate\Support\Facades\DB;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('annonce.index',['annonces'=>Annonce::all()]);

    }

    public function admin_index()
    {
        return view('annonce_admin.index',['annonces'=>Annonce::all()]);
    }

    /**
     * Search.
     *
     */
    public function search(Request $request)
    {
        $query = $request->input('query');
        $annonces = DB::table('annonces')->where('designation', 'LIKE', '%'.$query.'%')->get();
        return view('annonce.search',['annonces'=>$annonces]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('annonce.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnnonceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $annonce = $request->validate([
        //     'designation' => 'required',
        //     'description' => 'required|max:255',
        //     'prix' => 'required',
        //     'photo1' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        //     'photo2' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        //     'photo3' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        //     'photo4' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        // ]);

        {
            $images=array();
            if ($files = $request->file('images')) {
                foreach($files as $file){
                    $extension = $file->getClientOriginalExtension();
                    $fileName1 = md5(rand(1000,10000)).'.'.$extension;
                    $photo_path = 'assets/uploads/annonces/' ;
                    $photo_url =  $fileName1;
                    $file->move($photo_path,$fileName1);
                    $images[]=  $photo_url ;
                }
            }
            $annonce=new Annonce();
            $annonce->user_id=$request->user()->id;
            $annonce->designation=$request->designation;
            $annonce->sous_categorie_id=$request->sous_categorie_id;
            $annonce->etat_id=$request->etat_id;
            $annonce->photo1 = $images[0];
            $annonce->photo2 = $images[1];
            $annonce->photo3 = $images[2];
            $annonce->photo4 = $images[3];
            $annonce->description=$request->description;
            $annonce->prix=$request->prix;
            $annonce->active=$request->active;
            $annonce->save();
            return redirect()->route('annonce.index')->with('success','annonce ajoutee avec success ...');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $annonce=Annonce::find($id);
        return view('annonce.show',['annonce'=>$annonce]);
    }

    public function show_ad( $id)
    {
        $annonce=Annonce::find($id);
        return view('annonce_admin.show_ad',['annonce'=>$annonce]);
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $id)
    {
        $annonce=Annonce::find($id);
        return view('annonce_admin.edit',['annonce'=>$annonce]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnnonceRequest  $request
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnnonceRequest $request, Annonce $annonce ,$id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $annonce=Annonce::find($id);
        $annonce->delete();
        return redirect()->route('annonce_admin.index')->with('success','annonce supprimer avec success ...') ;
    }
}
