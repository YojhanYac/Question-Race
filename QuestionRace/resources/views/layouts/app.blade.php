<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>QuestionRace</title>
<link rel="shortcut icon" href="images/medal.png">

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="images/.png">
<!--<link rel="stylesheet" href="{{asset('css/styles-index.css')}}">
<link rel="stylesheet" href="{{asset('css/styles-contacto.css')}}">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />-->
<link rel="stylesheet" href="@yield('styles')">
</head>
<body onload="myFunction()">
<span id="home"></span>
<div id="" >
  <nav class="border-line-green navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">QUESTION RACE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarNav">

    <!-- Right Side Of Navbar -->
    <!-- Authentication Links -->
    <ul id="leftside" class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">INICIO</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/faq">FAQS</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/ranking">RANKING</a>


        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTRO') }}</a>
        </li>
        @endif
        @else
        @if(Auth::user()->role =='admin')
        <li class="nav-item active">
          <a class="nav-link" href="/admin">PANEL ADMIN</a>
        </li>
        @endif
      </ul>
      {{-- <img id="imgPerfil" src="/storage/{{Auth::user()->imagen}}" alt="" > --}}
      <ul id="user" class="navbar-nav text-right">

       <li class="nav-item active ">
        <a  class="nav-link" href="/perfil" aria-expanded="false">{{ Auth::user()->user }}
        </a>
      </li>
          {{--<li class="nav-item active ">
            <a id="navbarDropdown" class="nav-link" href="#" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              PERFIL {{ Auth::user()->user }} <span class="caret"></span>
            </a>
          </li> --}}
          <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('X') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
      </ul>
      @endguest
    </div>


  </div>

</nav>
@yield('fondo')
</div>
<!--<main class="main py-5">-->
<main class="border-line-blue text-main">
<div class="border-line-yellow main-content">
@yield('content')
</div>
</main>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="js/main.js"></script>
<script>
AOS.init();
</script>
<footer id="footer">
<div class="container-fluid bg-inverse border-line-green">
  <div class="row text-white py-4 text-white">
    <div class="col-md-3 footer-brand">
      <img src="../images/medal.png" class="float-left mr-3 imgfoter" alt="#">
      <h4 class="namber">QUESTION RACE</h4>
      <div class="blockquote-footer">Todos los derechos reservados <cite title="Source Title">2019</cite>
      </div>
    </div>
    <div class="col-md-3">
      <h4 class="lead">Contacto</h4>
      <p>Cualquier consulta que tengas no dudes en contáctanos haciendo click <a href="/contacto">aquí</a></p>
    </div>
    <div class="col-md-3">
      <h4 class="lead">Términos y condiciones</h4>
      <p>Lee nuestros <a href="#">términos</a> y <a href="#">condiciones</a> aquí para saber más sobre nosotros</p>
    </div>
    <div class="col-md-3">
      <h4 class="lead">Síguenos</h4>
      <a href="#"><span class="badge badge-primary">Facebook</span></a>
    </div>
  </div>
</div>
</footer>
</body>
</html>
