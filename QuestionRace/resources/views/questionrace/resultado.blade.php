@extends('layouts.app')
@section('styles','css/styles-end.css')

@section('content')
<div id="portada" class="border-line-red card sec_card" style="position: center; margin-top: 4rem; background-color: rgba(255,255,255, 0.6) !important;">
            <h1 class="won"><?= "EL JUEGO HA TERMINADO"?></h1>
            <h2 class="custex">Usuario: {{ Auth::user()->user }}</h2>
            <h2 class="custex">Puntaje obtenido: {{ session()->get('puntaje', 0) }} </h2>
            <h2 class="custex">Su mejor puntuación registrada: {{ session()->get('mejorPuntaje', 0) }} </h2><br>
            <button type="button" class="btn button-retry btn-primary btn-lg btn-block" onclick="window.location.href='/juego' {{session(['puntaje' => 0])}}">Jugar de nuevo!</button>
</div>
@endsection