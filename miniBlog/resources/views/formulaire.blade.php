@extends('layouts/main')


@section('subheader')
<h3><small>Sur cette page, n'hésitez pas à remplir le formulaire pour nous contacter !</small></h3>
@endsection

@section('content')


<!-- Absence d'action entraine l'exécution sur la même URL-->
<form action='/contact' method="post" class="section">
  <!--csrf = une sécurité de LARAVEL, qui génère un input invisible lequel
prend une valeur aléatoire et permet à LARAVEL de vérifier que le formulaire est
bien envoyé depuis notre site -->
  {{ csrf_field() }}
  <p><input type='name' name="name" placeholder="Name"></p>

  <p><input type='email' name="email" placeholder="Email" value="{{ old('email')}}"></p>

  <p><input type='date' name="date" placeholder="Date (AAAA-MM-JJ)"></p>

  <p><input type='text' name="message" placeholder="Message"></p>


  <p><input type='submit' value ="Envoyer mon message "></p>
</form>
@endsection
