@extends('layouts.app')
@section('styles','css/styles-faq.css')

@section('content')
<h1 class="titulo">¿Cómo podemos ayudarte?</h1>
        <h4 class="email titulo">Si no encuentras tu respuesta aquí, no dudes en enviarnos un email a <a href="">support@juego.com</a> </h4>
        <div class="accordion a_cust" id="accordionExample" style="margin: 2% 5% 5% 5%;">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="false" aria-controls="collapseOne">No puedo ingresar con mi cuenta</button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">Deberás habilitar las cookies de tu navegador para que la página pueda validar en cualquier momento que te encuentras conectado.
Si el inconveniente persiste, favor de realizar un reseteo de contraseña, o también nos puede escribir indicando el correo registrado para la cuenta a support@questionrace.com
</div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">El juego solo tiene cinco preguntas</button>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">Esto se realizó así para testear las mismas, es correcto que solo visualice cinco preguntas, que se repiten, en una futura actualización podrán ver más y elegir la categoría de estas. </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingfour">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour"
                aria-expanded="false" aria-controls="collapsefour">No figuro en el ranking</button>
        </h2>
    </div>
    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
        <div class="card-body">Para visualizarse en el ranking deberá completar como mínimo una vez el juego, ya sea terminándolo o perdiendo. Luego podrá verse en la tabla de posiciones.</div>
    </div>
</div>
<div class="card">
    <div class="card-header" id="headingfive">
        <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefive"
            aria-expanded="false" aria-controls="collapsefive">No visualizo correctamente el juego</button>
    </h2>
</div>
<div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
    <div class="card-body">El desarrollo se realizó con herramientas actualizadas, recomendamos utilizar Chrome como navegador en su última versión.</div>
</div>
</div>
<div class="card">
    <div class="card-header" id="headingThree">
        <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="false" aria-controls="collapseThree">Perdí conexión y no quiero perder mi avance</button>
    </h2>
</div>
<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
    <div class="card-body">Podrá refrescar la pestaña sin problemas, quedará en la misma pregunta en la que se encontraba antes de perder la conexión.</div>
</div>
</div>
</div>



@endsection