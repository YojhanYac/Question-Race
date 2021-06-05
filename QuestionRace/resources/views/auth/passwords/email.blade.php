@extends('layouts.app')

@section('content')

@error('email')

@enderror


<h4 class="descripcion text-white card-body pl-5 ml-5 mt-5">Tu cotraseña fue restablecida</h4>



@error('password')



@enderror

@endsection