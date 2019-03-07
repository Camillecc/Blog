<?php

namespace App\Http\Controllers;

use App\Contact ;

class ContactController extends Controller
{
  public function index(){
    return view('formulaire') ;
  }

  public function traitement(){
      request()->validate([
        'email'=> ['required', 'email',],
        'message' =>['required',],
      ]);

      $message = Contact::create([
        'contact_name' => request('name'),
        'contact_email' => request('email'),
        'contact_date'=>request('date'),
        'contact_message' =>request('message'),
      ]) ;

    return view('contact', array(
      'message' => $message
    )) ;
  }
}
