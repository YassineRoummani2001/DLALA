<?php

namespace App\Http\Controllers;

use App\Mail\DlalaMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class DlalaMailController extends Controller
{
    public function submit(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject'=>'required',
        'message' => 'required',
    ]);

    Mail::to('yassinerou221@gmail.com')->send(new DlalaMail(
        $validatedData['name'],
        $validatedData['email'],
        $validatedData['subject'],
        $validatedData['message']
    ));

    return redirect()->route('contact.index')->with('success', 'Your message has been sent!');
}

}
