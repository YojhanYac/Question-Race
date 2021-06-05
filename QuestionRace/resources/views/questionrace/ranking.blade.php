@extends('layouts.app') @section('styles', 'css/styles-ranking.css')
@section('content')

<section
    class="text-center border-line-red">
    <div class="border-line-blue container py-5 text-center">
        <h3 class="font-game box-image-web-orange border-line-green">
            RANKING DE JUGADORES
        </h3>
    </div>
    <div class="border-line-orange container py-1 text-center" >
        <div class="border-line-yellow">
        <table class="table table-hover border-line-yellow content-box-ranking" >
            <thead class="border-line-green">
                <tr class="prueba1 font-game box-image-web-orange border-line-red" style="border-radius: 15px;">
                    <th scope="col" style="text-align:center;">#</th>
                    <th scope="col">Usuario</th>
                    <th scope="col" style="text-align:center;">Puntaje</th>
                </tr>
            </thead>

            <tbody class="prueba2 border-line-blue font-game box-image-web" >
                @foreach($ranking as $key => $user)
                @if($a == "9")
                    <tr class="prueba5 border-line-red">
                @else
                <tr class="border-line-red">
                @endif
                    <th scope="row" style="text-align:center;">{{++$a}}</th>
                    <th>{{$ranking[$key]->usuario}}</td>
                    <th style="text-align:center;">{{$ranking[$key]->puntaje}}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
        </div>
        <nav class="border-line-green Page navigation example">
            <ul class="border-line-yellow pagination justify-content-center">
                {{ $ranking->links()}}
            </ul>

        </nav>

    </div>

    @endsection
</section>