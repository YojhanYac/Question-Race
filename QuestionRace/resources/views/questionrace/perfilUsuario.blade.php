@extends('layouts.app')
@section('styles','css/styles-juego.css')


@section('content')

    <section class="row border-line-green">
        <section class="left-image col-md-4 border-line-orange">
            <h1 class="name border-line-red">{{ Auth::user()->user }}</h1>
            <img class="perfil border-line-yellow" src="./storage/@if(Auth::user()->imagen == ''){{'perfilGenerico.jpg'}}
            @else{{Auth::user()->imagen}}@endif" alt="Imagen de perfil">
            <p>País: <strong>Argentina</strong></p>
            <button type="button" class="btn btn-perfil btn-primary border-line-blue">Cambiar avatar</button>
        </section>

        <section class="col-md-8 border-line-red perfil-form">
            <form class="card card_perfil border-line-blue" action="/perfil" method="POST">
                <label class="labelCustom border-line-green">Usuario</label>
                <input type="text" class="form-control input-form border-line-orange" value="{{ Auth::user()->user }}" class="col-md-12">
                <label class="labelCustom border-line-green">Nombre</label>
                <input type="text" class="form-control input-form border-line-orange" value="{{ Auth::user()->nombre }}" class="col-md-12">
                <label class="labelCustom border-line-green">Correo</label>
                <input type="text" class="form-control input-form border-line-orange" value="{{ Auth::user()->email }}" class="col-md-12">
                <label class="labelCustom-button border-line-green">
                    <button class="btn btn-primary btn_act_datos border-line-orange" type="submit">Actualizar datos</button>
                </label>
            </form>
        </section>
    </section>

@endsection