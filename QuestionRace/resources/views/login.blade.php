@extends('layouts.app')
@section('styles','css/styles-login.css')
@section('title','Iniciar Sesión')
@section('content')

<section class="text-center border-line-red">
	<form class="form-signin border-line-green" action="" method="POST" enctype="multipart/form-data">
		<img class="mb-4 logo border-line-yellow" src="images/medal.png" alt="">
		<h1 class="h3 mb-3 font-weight-normal border-line-blue">Iniciar Sesion</h1>
		<div class="form-row border-line-violet" id="lila">
			<div class="form-group col-md-6 border-line-orange">
				<input type="email" name="email" class="form-control border-line-yellow" id="inputEmail4" placeholder="Email" value="">
					</div>
					<div class="form-group col-md-6 border-line-orange">
					<input type="password" name="password" class="form-control border-line-yellow" id="inputPassword4" placeholder="Contraseña">
					</div>
					<div class="form-group col-md-6 border-line-orange">
					<input type="checkbox" name="remember" id="remember" class="border-line-yellow">
					<label for="remember" class="border-line-red">Recordarme</label>
					</div>
					<div class="form-group col-md-6 border-line-orange">
					@if (isset($errorMessage) && $errorMessage != "") {
						echo $errorMessage;
					} @endif
				</div>
			</div>
			<div class="form-action border-line-blue">
				<button type="submit" class="btn btn-primary border-line-violet">Iniciar sesión</button>
				<a href="reset-pwd-request.php" class="border-line-green">Olvidé mi contraseña</a>
			</div>
			<p class="mt-5 mb-3 text-muted border-line-yellow">No estas registrado? <a href="register.php">Registrarme</a></p>

		</form>
	</section>
	@endsection