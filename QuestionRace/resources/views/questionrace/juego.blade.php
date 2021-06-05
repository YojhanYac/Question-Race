@extends('layouts.app')
@section('styles','css/styles-juego.css')

@section('content')

<div class="row border-line-red juego">

    <!-- ///////////////// LEFT ///////////////-->
    <div id="portada" class="border-line-blue left col-md-4 btn-game">
        <h2 class="font-game">PUNTAJE: {{ session()->get('puntaje', 0) }} </h2>
        <form id="juego" action="/juego" method="POST" class="border-line-yellow">
            <h2 class="call-to-action font-game">Pregunta #{{$pregunta->id}}</h2>
            @csrf
            <p class="font-game-simple-black">{{$pregunta->pregunta}}</p>
            <input type="hidden" name="pregunta_id" class="" id="rtaCorrecta" value="{{$pregunta->id}}">
            @foreach($respuestas as $key => $respuesta)

            <div class=" btn-group-toggle btn-block font-game-simple" data-toggle="buttons">
                <label class="btn btn-secondary active" id="resp{{$key}}">
                    <input type="radio" name="rta" value="{{$respuestas[$random[$key]]->respuesta}}" checked>{{$respuestas[$random[$key]]->respuesta}}
                </label>
            </div>
            @endforeach

            <button class="btn btn-primary" type="submit" name="enviar" id="btnjuego">Enviar</button>
        </form>
    </div>
    <!-- /////////////////FIN LEFT ///////////////-->

    <!-- ///////////////// IMAGENES RIGTH ///////////////-->
    <section class="border-line-green rigth col-md-8">
        <img src="images/fondo.jpg" class="border-line-red img-back" alt="Imagen de fondo QUESTION RACE" >
        <img src="images/medal.png" class="border-line-yellow img-ficha" id="medal" alt="ficha de juego">
        <div class="border-line-blue floating" id="astro">&nbsp;</div>

    </section>
    <!-- ///////////////// FIN IMAGENES RIGTH ///////////////-->

    <!-- ///////////////// JS PARA COORDENADAS ///////////////-->
    <script>
        document.querySelector("#rtaCorrecta").addEventListener("onload", myFunction)

        var nroPregunta = document.querySelector("#rtaCorrecta").value
        
        function myFunction() {
            if (nroPregunta == 2) {
                //Si es correcta aplicar nuevas coordenadas y continuar a la proxima pregunta
                document.querySelector('#medal').style = "margin-left: -71%;margin-top: 28%;"
            }if (nroPregunta == 3) {
                document.querySelector('#medal').style = "margin-left: -63.7%;margin-top: 29%;"
            }if (nroPregunta == 4) {
                document.querySelector('#medal').style = "margin-left: -40.3%;margin-top: -26%;"
            }if (nroPregunta == 5) {
                document.querySelector('#medal').style = "margin-left: -31.5%;margin-top: -29%;"
            }
        }
    </script>
    <!-- ///////////////// FIN JS PARA COORDENADAS ///////////////-->
</div>
@endsection