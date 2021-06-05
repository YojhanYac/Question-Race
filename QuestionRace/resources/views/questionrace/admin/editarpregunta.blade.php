@extends('layouts.app')
@section('styles','css/styles-index.css')

@section('content')

<div class="container_cargar_preg">
    <!--CUSTOM EDITAR PREGUNTA -->
    <form class="form1" action="/preguntas/modificar" method="POST">
            @csrf
            <h3 class="tit_preg">Editá la pregunta</h3>
            <input class="form-control" type="hidden" name="id" value="{{$pregunta->id}}">
            <textarea class="form-control" name="pregunta" value="{{$pregunta->pregunta}}">{{$pregunta->pregunta}}</textarea>
             @foreach($pregunta->respuestas as $key => $respuesta)
            <label for="respuesta1">Respuesta {{$key + 1}}</label>
            <input class="form-control" type="text" name="rta[{{$key}}][respuesta]" value="{{$respuesta->respuesta}}">
            <input class="form-control" type="hidden" name="rta[{{$key}}][esCorrecta]" value="@if($respuesta->validacion=='c') 1 @else 0 @endif">
            <br>
            @endforeach
            <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
    <!-- FIN EDITAR PREGUNTA -->
</div>

@endsection
