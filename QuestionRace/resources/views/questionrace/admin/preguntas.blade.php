@extends('layouts.app')

@section('content')
<div class="container py-5">
@if (session('update'))
<script>swal("{{ session('update') }}", "Pulse OK para continuar", "success");</script>
@endif
@if (session('delete'))
<script>swal("{{ session('delete') }}", "Pulse OK para continuar", "success");</script>
@endif

<h3>PREGUNTAS</h3>
    <table class="table table-hover">
        <thead>
        <tr class="table-warning">
            <th scope="col">#</th>
            <th scope="col">Pregunta</th>
            </tr>
        </thead>
        @foreach($preguntas as $pregunta)
            <tbody>
                <tr>
                    <th scope="row">{{$pregunta->id}}</th>
                    <td>{{$pregunta->pregunta}}</td>
                    <td><a href="/preguntas/modificar/{{$pregunta->id}}"><button type="button" class="btn btn-warning btn-sm">Modificar</button></a></td>
                    <td><a href="/preguntas/eliminar/{{$pregunta->id}}"><button type="button" class="btn btn-danger btn-sm">Eliminar</button></a></td>
                </tr>
            </tbody>
        @endforeach
    </table>
</div>
<div class="container py-1">
    <table class="table table-hover">
        <thead>
        <tr class="table-warning">
            <th scope="col">#</th>
            <th scope="col">Respuesta</th>
            <th scope="col">Validacion</th>
            <th scope="col">N° Pregunta</th>
            </tr>
        </thead>
        @foreach($respuestas as $respuesta)
            <tbody>
                <tr>
                    <th scope="row">{{$respuesta->id}}</th>
                    <td>{{$respuesta->respuesta}}</td>
                    <td>{{$respuesta->validacion}}</td>
                    <td>{{$respuesta->id_pregunta}}</td>
                    <td><a href="/respuestas/modificar/{{$respuesta->id}}"><button type="button" class="btn btn-warning btn-sm">Modificar</button></a></td>
                    <td><a href="/respuestas/eliminar/{{$respuesta->id}}"><button type="button" class="btn btn-danger btn-sm">Eliminar</button></a></td>
                </tr>
            </tbody>
        @endforeach
    </table>

</div>





@endsection
