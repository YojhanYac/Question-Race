@extends('layouts.app')
@section('styles', 'css/styles-index.css')
@section('fondo')
<img class="img-header" src="./images/fondo-web.jpg" alt="">
@endsection

@section('content')
<section class="call-to-action callIndex">
  <h2 class="tex-cta">Empeza a jugar ahora!!</h2>
  <a href="/juego" class="btn btn-primary btn-lg btn-warning btnWindex" role="button">COMENZAR</a>
</section>

<div class="container my-5">

		<div class="row d-flex align-items-center my-5 py-5">
			<div class="col-md-7">
				<h2 class="display-4">Desafía jugando!<br><span class="text-muted">Te animas? </span></h2>
				<p class="lead">Probá y desafía a tus amigos con este puzle de preguntas generales, no hay tiempo de espera, podrás buscar y googlear si tienes dudas, el objetivo es pasarla bien y encontrarle la vuelta al juego.
			</div>
			<div class="col-md-5">
				<img class=" img-fluid mx-auto" src="images/cards1.png" alt="Generic placeholder image">
			</div>
		</div>

		<hr class="" id="beneficio2">

		<div class="row d-flex align-items-center my-5 py-5">
			<div class="col-md-5">
				<img class=" img-fluid mx-auto" src="images/question_race_table_2.PNG" alt="Generic placeholder image">
			</div>
			<div class="col-md-7">
				<h2 class="display-4">Progreso a la vista<br><span class="text-muted">Un tablero</span></h2>
				<p class="lead">Verás en cada pregunta un tablero con tu ficha, con la que podrás identificar en cada momento si te encuentras cerca de la meta final. ¡No te equivoques! solo tiene una oportunidad, o volverás al inicio.</p>
			</div>
		</div>

		<hr class="" id="beneficio3">

		<div class="row d-flex align-items-center my-5 py-5">
			<div class="col-md-7">
				<h2 class="display-4">Ranking con posiciones<br><span class="text-muted">Práctica!</span></h2>
				<p class="lead">¡Tenemos un ranking de los mejores puntajes, aprovecha y sitúate lo más arriba posible para que no te alcancen! No te preocupes, solo queda guardada tu mejor posición.</p>
			</div>
			<div class="col-md-5">
				<img class=" img-fluid mx-auto" src="images/question_race_table_1.PNG" alt="Generic placeholder image">
			</div>
		</div>
	</div>

@endsection