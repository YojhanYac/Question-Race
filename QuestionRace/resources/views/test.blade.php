	{{--
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>El título de mi página</title>
	<link rel="stylesheet" href="style.css">
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
</head>
<body>
	<header>
		<h1>Header</h1>
	</header>
	<!-- Aquí empieza el contenido principal de nuestra página -->
	<main>
		<h2>Relacionado</h2>
	</main>
	<footer>
		<p>©Copyright 2050 by nobody. All rights reversed.</p>
	</footer>
</body>
</html>




@extends('layout.main')


@section('main')

	<div class="container my-5">

		<div class="row d-flex align-items-center my-5 py-5">
			<div class="col-md-7">
				<h2 class="display-4">Título del beneficio 1. <br><span class="text-muted">Sub titulo.</span></h2>
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
				<h2 class="display-4">Título del beneficio 2. <br><span class="text-muted">Sub titulo.</span></h2>
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
				<h2 class="display-4">Título del beneficio 3. <br><span class="text-muted">Sub titulo.</span></h2>
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

	<section class="call-to-action">
		<h2 class="tex-cta">Empeza a jugar ahora!!</h2>
		<button type="button" class="btn btn-cta btn-primary btn-lg btn-warning"><a href="login.php">COMENZAR</a></button>
	</section>
	@endsection
--}}


<!DOCTYPE html>
<html>
<head>
	{{-- #############  META  ###############--}}
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>QUESTION RACE</title>
	{{-- #############  LINK  ###############--}}
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles-index.css">
</head>

<body>
	{{-- #############  HEADER  ###############--}}
	<header>

		<?php
		$logged = isset($_SESSION['login']);
		?>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="index.php">QUESTION RACE</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php"></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">HOME</a>
				</li>
				<?php if($logged){
					echo '<li class="nav-item"><img src="images/users/'. $_SESSION['user']['user_pic'] .'" class="thumbnail-user"/><a>' . $_SESSION['user']['user_name'] . '</a>
					<div class="dropdown__box">
					<a href="perfil.php" class="dropdown__link">Ver perfil</a>
					<a href="logout.php" class="dropdown__link">Cerrar sesión</a>
					<li class="nav-item active">
					<a class="nav-link" href="juego.php">JUGAR</a>
					</li>
					</div>
					</li>';
				}else {
					echo '<li><a href="./login.php">Entrar</a></li>
					<li><a href="./register.php">Registrarse</a></li>';
				} ?>
				<li class="nav-item active">
					<a class="nav-link" href="ranking-de-usuarios.php">RANKING</a>
				</li>

				<li class="nav-item active">
					<a class="nav-link" href="preguntas-frecuentes.php">AYUDA</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="contacto.php">CONTACTO</a>
				</li>
			</ul>
		</div>
	</nav>

</header>



<!--//////////////////// poner en contenido////////////////////////////-->
			<img class="img-header" src="images/fondo-web.jpg" alt="fondo de página web">




<main>

	<div class="container my-5">

		<div class="row d-flex align-items-center my-5 py-5">
			<div class="col-md-7">
				<h2 class="display-4">Título del beneficio 1. <br><span class="text-muted">Sub titulo.</span></h2>
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
				<h2 class="display-4">Título del beneficio 2. <br><span class="text-muted">Sub titulo.</span></h2>
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
				<h2 class="display-4">Título del beneficio 3. <br><span class="text-muted">Sub titulo.</span></h2>
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

	<section class="call-to-action">
		<h2 class="tex-cta">Empeza a jugar ahora!!</h2>
		<button type="button" class="btn btn-cta btn-primary btn-lg btn-warning"><a href="login.php">COMENZAR</a></button>
	</section>

</main>

<!--///////////////////// FOOTER /////////////////////////-->
<footer class="container-fluid bg-inverse">
	<div class="row text-white py-4 text-white">
		<div class="col-md-3 footer-brand">
			<img src="images/medal.png" class="float-left mr-3 imgfoter" alt="#">
			<h4 class="namber">QUESTION RACE</h4>
			<div class="blockquote-footer">Todos los derechos reservados <cite title="Source Title">2019</cite>
			</div>
		</div>
		<div class="col-md-3">
			<h4 class="lead">Contacto</h4>
			<p>Cualquier consulta que tengas no dudes en contáctanos haciendo click <a href="contacto.php">aquí</a></p>
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
</footer>
<!--///////////////////// FIN FOOTER /////////////////////////-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>
</body>

</html>