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
				<h2 class="display-4">Desafía tu conocimiento<br><span class="text-muted">Te animas? </span></h2>
				<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
					euismod
					semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus
					ac cursus
				commodo.</p>
			</div>
			<div class="col-md-5">
				<img class=" img-fluid mx-auto" src="images/cards1.png" alt="Generic placeholder image">
			</div>
		</div>

		<hr class="" id="beneficio2">

		<div class="row d-flex align-items-center my-5 py-5">
			<div class="col-md-5">
				<img class=" img-fluid mx-auto" src="images/cards2.png" alt="Generic placeholder image">
			</div>
			<div class="col-md-7">
				<h2 class="display-4">Las trivias más divertidas <br><span class="text-muted">Sub titulo.</span></h2>
				<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
					euismod
					semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus
					ac cursus
				commodo.</p>
			</div>
		</div>

		<hr class="" id="beneficio3">

		<div class="row d-flex align-items-center my-5 py-5">
			<div class="col-md-7">
				<h2 class="display-4">Preguntas en general<br><span class="text-muted">Sub titulo.</span></h2>
				<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
					euismod
					semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus
					ac cursus
				commodo.</p>
			</div>
			<div class="col-md-5">
				<img class=" img-fluid mx-auto" src="images/cards3.png" alt="Generic placeholder image">
			</div>
		</div>
	</div>

@endsection