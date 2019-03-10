<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function affichage() {
      return view('contact') ;
    }

    public function confirmation(){
      $contact = \App\Contact::create([
        'nom' => request('name'),
        'email' => request('email'),
        'tel' => request('telephone'),
        'date'=> request('date'),
        'message'=> request('message')
      ]) ;
      return view('confirmation') ;
    }
}
