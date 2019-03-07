<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
  public function index(){
    $posts= \App\Post::all() ;
    //$auteurs= \App\User::all() ;
    return view('articles', array(
      'posts' => $posts,
    /*'auteurs' => $auteurs*/)
    );
  }

  public function show($post_name){
    $post = \App\Post::where('post_name', $post_name)->get() ;
    //var_dump($post) ; die ;
    return view('single', array(
      'post'=> $post)
    );
  }
}
