<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Homepage Camille</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <style>
  html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
  }

  .full-height {
    height: 50vh;
  }

  .flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
  }

  .position-ref {
    position: relative;
  }

  .top-right {
    position: absolute;
    right: 10px;
    top: 18px;
  }

  .content {
    text-align: center;
  }

  .title {
    font-size: 84px;
  }

  .links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
  }

  .m-b-md {
    margin-bottom: 30px;
    font-size: 50px ;
  }
  #intro{
    color: black;
  }

  .accueil{
    text-align: justify;
    position: absolute;
    display: right;
    align-items: right;
    font-style: italic;
    margin-top: 70px ;
    margin-bottom: 30px ;
  }

  #titre{
    padding-bottom: 15px;
    color: blue ;
  }

  #infos{
    padding-bottom: 10px;
  }

  .foot{
    margin-top: 30px ;
    margin-bottom: 30px;
    border: black ;
    background-color: #ADD8E6 ;
  }
  </style>
</head>
<body>

<div class="flex-center position-ref full-height">
  @if (Route::has('login'))
  <div class="top-right links">
    @auth
    <a href="{{ url('/home') }}">Home</a>
    @else
    <a href="{{ route('login') }}">Login</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}">Register</a>
    @endif
    @endauth
  </div>
  @endif

  <div class="content">
    <div class="title m-b-md">
      Bienvenue sur mon site
    </div>
    @yield("infosPage")

    <div class="links">
      @yield("liens")
    </div>
      @yield("contenu")

    <footer class=foot>
      <p> Site Web réalisé dans le cadre d'un projet personnel dans l'objectif de mettre en pratique mes connaissances.
     </br> Tous droits réservés - Mars 2019</p>
    </footer>
  </div>
</div>

</body>

</html>
