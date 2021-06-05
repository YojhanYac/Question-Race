@extends('layouts.app')
@section('styles','css/styles-index.css')

@section('content')

<div class="container_cargar_preg">
    @if(isset($mensaje))
    <script>swal("Carga exitosa", "Pulse OK para continuar", "success");</script>
    @endif

    <!--CUSTOM CARGAR PREGUNTA -->
    <form class="form1" action="/preguntas/agregar" method="POST">
            @csrf
            <h3 class="tit_preg">Sumá tu pregunta</h3>
            <textarea class="form-control" name="pregunta"></textarea>

        <div class="form-group">
            <h3 class="tit_res">Y ahora las respuestas</h3>
            
            <label for="respuesta1">Opcion incorrecta 1</label>
            <input type="text" name="rta[1]" value="" class="form-control" placeholder="Redactar aqui">

            <label for="respuesta2">Opcion incorrecta 2</label>
            <input type="text" name="rta[2]" value="" class="form-control" placeholder="Redactar aqui">

            <label for="respuesta3">Respuesta Correcta</label>
            <input type="text" name="rta[C]" value="" class="form-control" placeholder="Redactar aqui">
        </div>
        <button type="submit" class="btn btn-primary">Cargar</button>
    </form>
    <!-- FIN CARGAR PREGUNTA -->
</div>

@endsection