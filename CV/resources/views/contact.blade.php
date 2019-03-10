@extends('layout')

@section("infosPage")
  <p>
    <h4 id="intro"> Sur cette page vous trouverez un formulaire si vous souhaitez me contacter. </br>
    Alors une question, une suggestion n'hésitez plus !</h4></br>
  </p>
@endsection

@section('liens')
<a href="/">Accueil</a>
<a href="/formation">Formation</a>
<a href="/experiences">Expériences</a>
<a href="/publications">Publication(s)</a>
<a href="https://github.com/Camillecc?tab=repositories">GitHub</a>
@endsection


@section("contenu")
<form method="post">
  {{ csrf_field()}}
    <div class="accueil">
      <p> Merci d'indiquer votre nom et/ou prénom ou encore pseudonyme afin de recevoir un message personnalisé. </br>
        J'ajouterai que le meilleur moyen d'obtenir une réponse est d'insérer une adresse mail valide.<br><p>
        <h4>À vos crayons ! (Ou clavier ...)<h4></n>
      <h6>Qui êtes vous ?</br>
        <input type='name' name="name" placeholder="Name"></br>
        @if($errors->has('name'))
          <p>Le champ « Nom » a une erreur</p>
        @endif
      </h6>
      <h6>Où puis-je vous recontacter ? </br>
        <input type='email' name="email" placeholder="Email" value="{{ old('email')}}"></br>
        <input type='tel' name="telephone" placeholder="Téléphone"></br>
      </h6>

      <h6>Quel jour sommes-nous ?</br>
        <input type='date' name="date" placeholder="Date (AAAA-MM-JJ)"></br>
      </h6>

      <h6>Quel est votre message ?</br>
        <input type='text' name="message" placeholder="Message"></br>
      </h6>

      <h6>Prêt(e) ?</br>
        <input type='submit' value ="Envoyer mon message ">
      </h6>
    </div>
</form>
@endsection
