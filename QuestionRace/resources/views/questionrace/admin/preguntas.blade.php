@extends('layouts.app')
@section('styles','css/styles-preguntas.css')

@section('content')
<div class="container py-5">
@if (session('update'))
<script>swal("{{ session('update') }}", "Pulse OK para continuar", "success");</script>
@endif
@if (session('delete'))
<script>swal("{{ session('delete') }}", "Pulse OK para continuar", "success");</script>
@endif

<h3 class="font-game">PREGUNTAS</h3>
    <table class="table table-hover">
        <thead>
        <tr class="table-warning">
            <th scope="col">#</th>
            <th scope="col">Pregunta</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        @foreach($preguntas as $pregunta)
            <tbody class="tbody-values">
                <tr>
                    <th class="text-td" scope="row">{{$pregunta->id}}</th>
                    <td class="text-td">{{$pregunta->pregunta}}</td>
                    <td class="td-width"><a href="/preguntas/modificar/{{$pregunta->id}}"><button type="button" class="btn btn-warning btn-sm">Modificar</button></a></td>
                    <td class="td-width"><a href="/preguntas/eliminar/{{$pregunta->id}}"><button type="button" class="btn btn-danger btn-sm">Eliminar</button></a></td>
                </tr>
            </tbody>
        @endforeach
    </table>
</div>
<div class="container py-1">
<h3 class="font-game">RESPUESTAS</h3>
    <table class="table table-hover">
        <thead>
        <tr class="table-warning">
            <th scope="col">#</th>
            <th scope="col">Respuesta</th>
            <th scope="col">Validacion</th>
            <th scope="col">N° Pregunta</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        @foreach($respuestas as $respuesta)
            <tbody class="tbody-values">
                <tr>
                    <th class="text-td" scope="row">{{$respuesta->id}}</th>
                    <td class="text-td">{{$respuesta->respuesta}}</td>
                    <td class="text-td">{{$respuesta->validacion}}</td>
                    <td class="text-td">{{$respuesta->id_pregunta}}</td>
                    <td class="td-width"><a href="/respuestas/modificar/{{$respuesta->id}}"><button type="button" class="btn btn-warning btn-sm">Modificar</button></a></td>
                    <td class="td-width"><a href="/respuestas/eliminar/{{$respuesta->id}}"><button type="button" class="btn btn-danger btn-sm">Eliminar</button></a></td>
                </tr>
            </tbody>
        @endforeach
    </table>

</div>





@endsection
