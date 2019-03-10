<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formation', function(){
  return view('formation') ;
}) ;

Route::get('/experiences', function(){
  return view('experiences') ;
}) ;

Route::get('/publications', function(){
  return view('publications') ;
});

// Utilisation de Controllers
Route::get('/contact', "ContactController@affichage") ;

Route::post('/contact', "ContactController@confirmation");
