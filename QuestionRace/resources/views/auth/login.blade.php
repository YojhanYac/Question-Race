@extends('layouts.app')
@section('styles','css/styles-login.css')
@section('title','Iniciar Sesión')
@section('content')
<div class="container border-line-red text-center">
    <div class="row justify-content-center border-line-yellow box-login-web">
        <div class=" border-line-green box-login-container size-box-login">
            <div class="border-line-blue box-login-div">
                <div class="card-body border-line-orange">
                    <form method="POST" action="{{ route('login') }}" class="border-line-violet">
                        @csrf
                      <img class="mb-4 logo border-line-red" src="images/medal.png" alt="">
                      <h3 class="inic border-line-yellow font-game">{{ __('Iniciar Sesion') }}</h3>

                        <div class="form-group row border-line-green">
                            <div class="col-md-12 border-line-blue">
                                <input id="email" type="text" class="border-line-orange form-control @error('user') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="user" placeholder="Email" autofocus>

                                @error('user')
                                    <span class="invalid-feedback border-line-violet" role="alert">
                                        <strong class="border-line-red">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row border-line-yellow">
                            <div class="col-md-12 border-line-green">
                                <input id="password" type="password" class="border-line-blue form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback border-line-orange" role="alert">
                                        <strong class="border-line-violet">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row border-line-red ">
                            <div class="col-md-6 offset-md-3 border-line-yellow">
                                <div class="form-check border-line-green">
                                    <input class="form-check-inpu border-line-bluet" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label border-line-orange" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 border-line-violet">
                            <div class="col-md-8 offset-md-2 border-line-red">
                                <button type="submit" class="btn btn-primary border-line-yellow">
                                    {{ __('Iniciar Sesion') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link border-line-green font-game-shadow font-game-shadow-hover" href="{{ route('password.request') }}">
                                        {{ __('Olvidé mi contraseña') }}
                                    </a>
                                    <p class="mt-5 mb-3 text-muted border-line-blue font-game-shadow">No estas registrado? <a href="register" class="border-line-orange font-game-shadow font-game-shadow-hover">Registrarme</a></p>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
