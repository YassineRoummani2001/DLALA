<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.index',['contacts'=>Contact::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = $request->validate([
            'subject' => 'required',
            'message' => 'required|max:255',
            'user_id' => 'required',
        ]);
        $contact= new Contact();
        $contact ->user_id = $request ->user()->id ;
        $contact ->subject=$request->subject ;
        $contact -> message = $request ->message;
        $contact->save();
        return redirect()->route('contact.create')->with('success','contact ajoutee avec success ...') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $contact=Contact::find($id);
        return view('contact.show',['contact'=>$contact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactRequest  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $id)
    {
        $contact=Contact::find($id);
        $contact->delete();
        return redirect()->route('contact.index')->with('success','annonce supprimer avec success ...') ;
    }
}
