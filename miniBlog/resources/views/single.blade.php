@extends('layouts/main')


@section('subheader')
<h3><small>Sur cette page, découvrez le contenu de l'article sélectionné </small></h3>
@endsection

@section('content')
<h4><strong><center>{{ $post[0]->post_title }}</strong></center></h4>
<div>
  <p>{{ $post[0]->post_content}}</p>
  <p> <small>Date de mise en ligne : {{ $post[0]->post_date }}
  </br>Écrit par : {{ $post[0]->post_author}}</small></p>
</div>



@endsection
