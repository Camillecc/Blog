@extends('layouts/main')

@section('subheader')
<h3><small>Lecture d'articles, questions, abonnement !
  Pour tout savoir sur mon blog, prenez le temps de lire !</small></h3>
@endsection

@section('content')
<h4><center>La liste des trois derniers articles publiés !</center> </h4>
</br>
  @for($i = 7 ; $i < 10 ; $i++)
  <dl>
  <dt><a href="/articles/{{$posts[$i]->post_name}}">{{ $posts[$i]->post_title }}</a></dt>
  <dd> Auteur : {{$posts[$i]->post_author}}</dd>
  <dd> <small> Date :{{ $posts[$i]->post_date}} </small></dd>
  <br>
  </dl>
  @endfor



</ul>
@endsection
