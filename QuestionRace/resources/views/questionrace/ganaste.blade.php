@extends('layouts.app')
@section('styles','css/styles-end.css')



@section('content')
<div id="" class="border-line-red card sec_card" style="background-color: rgba(255,255,255, 0.6) !important;">

  <img class="border-line-green img_l" src="images/medal.png" alt="">
  <img class="border-line-yellow img_r" src="images/medal.png" alt="">
            <p class="fel">Completaste el juego</p>
            <h1 class="won"><?="Felicidades!!"?></h1>
            <h2 class="custex">Usuario: {{ Auth::user()->user }}</h2>
            <h2 class="custex">Tu puntaje es: {{ session()->get('puntaje', 0) }} </h2><br>
            <button type="button" class="btn button-retry btn-primary btn-lg btn-block" onclick="window.location.href='/juego' {{session(['puntaje' => 0])}}">Jugar de nuevo!</button>
</div>
@endsection