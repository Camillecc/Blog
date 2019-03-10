@extends('layout')

@section("infosPage")
      <p>
        <h4 id="intro"> Vous pourrez y trouver des informations concernant </br>
          mes expériences, ma formation, mes publications scientifiques </br>
          et en cas de besoin, un formulaire de contact.</h4></br>
        </p>
@endsection

@section('liens')
  <a href="/formation">Formation</a>
  <a href="/experiences">Expériences</a>
  <a href="/publications">Publication(s)</a>
  <a href="/contact">Contact</a>
  <a href="https://github.com/Camillecc?tab=repositories">GitHub</a>
@endsection

@section('contenu')
        <div class="accueil">
          <dd id="titre">Formation en cours
            <dt id="infos">Master <italic>Mathématiques et Informatique appliquées aux <strong>
              Sciences Humaines et Sociales</strong></italic></dt>
            </br>
          </dd>
          <dd id="titre">Situation actuelle
            <dt id="infos">Recherche d'un stage de fin d'études dans le <i><strong>développement WEB</i></strong>
              ou l'<ins>administration Systèmes et Réseaux</ins></dt>
            </br>
          </dd>
          <dd id="titre">Loisirs
            <dt>Lecture
              <dd><li>Science-fiction</li></dd>
              <dd><li>Essais historiques et philosophiques</li></dd>
              <dd><li>Théâtre classique</li></dd>
            </dt>
          </br>
            <dt>Crafting</dt>
              <dd><li type="square">Peinture et collage</li></dd>
              <dd><li type="square">Tricot</li></dd>
              <dd><li type="square">Bientôt couture...</li></dd>
@endsection
      </div>
