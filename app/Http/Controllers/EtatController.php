<?php

namespace App\Http\Controllers;

use App\Models\Etat;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateEtatRequest;

class EtatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('etat.index',['etats'=>Etat::all()]);
    // }

    public function admin_index()
    {
        return view('etat_admin.index',['etats'=>Etat::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etat_admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEtatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $etat = $request->validate([
            'etat' => 'required',
        ]);
        $etat=new Etat();
        $etat->etat=$request->etat;
        $etat->save();
        return redirect()->route('etat_admin.index')->with('success','Etat ajoutee avec success ...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etat  $etat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etat=Etat::find($id);
        return view('etat_admin.show',['etat'=>$etat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etat  $etat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etat=Etat::find($id);
        return view('etat_admin.edit',['etat'=>$etat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEtatRequest  $request
     * @param  \App\Models\Etat  $etat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEtatRequest $request, Etat $etat ,$id)
    {
        $etat=Etat::find($id);
        $etat->etat=$request->etat;
        $etat->save();
        $etat->update($request->all());
        return redirect()->route('etat_admin.index')->with('success','etat update avec success ...') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etat  $etat
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $etat=Etat::find($id);
        $etat->delete();
        return redirect()->route('etat_admin.index')->with('success','etat supprimer avec success ...') ;
    }
}
