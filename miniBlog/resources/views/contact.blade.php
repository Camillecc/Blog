@extends('layouts/main')

@section('subheader')
<h3><small>Confirmation de l'envoi de votre message !</small></h3>
@endsection


@section('content')
<h5>Votre demande a bien été prise en compte ! </h5>
<div>
  <p>Nom : {{ $message->contact_name}}
  </br>Email : {{ $message->contact_email }}
  </br>Message : {{ $message->contact_message}}
  </p>
</div>
@endsection
