@extends('layouts/main')

@section('subheader')
<h3><small>Sur cette page, découvrez la liste des articles disponibles !</small></h3>
@endsection

@section('content')
@foreach($posts as $post)
<dl>
<dt> Titre : {{ $post->post_title}} </dt>
  <dd><small><a href="/articles/{{$post->post_name}}">{{ $post->post_title }}</a></small></dd>
  <dd> Auteur : {{$post->post_author}}</dd>
  <dd> <small> Date :{{ $post->post_date}} </small></dd>
</dl>
@endforeach
@endsection
