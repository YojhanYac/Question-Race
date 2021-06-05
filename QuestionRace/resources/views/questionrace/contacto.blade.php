@extends('layouts.app')
@section('styles', 'css/contacto.css')

@section('content')
  <div class = "text-center border-line-red" >
  <form class="border-line-orange form-contact-box">
    <!--<h1 class="border-line-violet">Contacto</h1>-->
    <div class="border-line-green form-group">
        <input
            type="email"
            class="form-control border-line-yellow"
            id="exampleFormControlInput1"
            placeholder="Nombre"></div>
        <div class="form-group border-line-green">
            <input
                type="email"
                class="form-control border-line-yellow"
                id="exampleFormControlInput1"
                placeholder="Ejemplo@correo.com"></div>
            <div class="form-group border-line-green">
                <textarea
                    class="form-control border-line-red"
                    id="exampleFormControlTextarea1"
                    rows="3"
                    placeholder="Su mensaje"></textarea>
            </div>
            <div class="form-group border-line-orange">
            <button type="submit" class="border-line-blue btn btn-primary button-send">Enviar</button>
          </div>
        </form>
    </div>
    @endsection