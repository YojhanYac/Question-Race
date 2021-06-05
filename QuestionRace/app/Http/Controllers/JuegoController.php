<?php

namespace App\Http\Controllers;

use Auth;
use App\Ranking;
use App\Pregunta;
use App\Respuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JuegoController extends Controller
{

    public function traerDatos(){
        $pregunta = DB::table('preguntas')->first();
        $respuestas = DB::table('respuestas')->where('id_pregunta', '=', $pregunta->id)->get();
        $rand = range(0, 2);
        shuffle($rand);
        foreach ($rand as $val) {
            $random[] = $val;
        }
       /*  foreach($respuestas as $key => $respuesta){
            dd($respuestas[0]->respuesta);
        }
         */

        return view('questionrace.juego', [ 'pregunta' => $pregunta, 'respuestas' => $respuestas, 'random' => $random ]);
    }

    public function verificacion(Request $req){

        $respuesta = DB::table('respuestas')->where([
            ['id_pregunta', '=', $req['pregunta_id']],
            ['validacion', '=', 'c'],
        ])->get();
        $rand = range(0, 2);
        shuffle($rand);
        foreach ($rand as $val) {
            $random[] = $val;
        }
        $usuarioEncontrado = DB::table('ranking')->where('usuario', '=', Auth::user()->user)->first(); 

        foreach($respuesta as $rtaCorrecta);
        if ($req['rta'] == $rtaCorrecta->respuesta) {

            $puntaje = session()->get('puntaje', 0); // ultimo puntaje recibido
            //$puntaje = $puntaje + 10;
            session(['puntaje' => ++$puntaje]);

            if($puntaje >= 5 && $usuarioEncontrado != '')
            {
                DB::table('ranking')->where('usuario', '=', Auth::user()->user)->update(['puntaje' => $puntaje]);
                return view('questionrace.ganaste');
            }
            if($puntaje >= 5 && $usuarioEncontrado == '') {
                $puntajeFinal = new Ranking;
                $puntajeFinal->usuario = Auth::user()->user;
                $puntajeFinal->puntaje = $puntaje;
                $puntajeFinal->save();
                return view('questionrace.ganaste');
            }
            $preguntaAnterior = $req['pregunta_id'];
            $preguntaAnterior++;
            $pregunta = DB::table('preguntas')->where('id', '=', $preguntaAnterior)->first();
            $respuestas = DB::table('respuestas')->where('id_pregunta', '=', $pregunta->id)->get();
            return view('questionrace.juego', compact('pregunta', 'respuestas', 'random'));
        } else {
            //$usuarioEncontrado = DB::table('Ranking')->where('usuario', '=', Auth::user()->user)->first(); //busca al usuario en la base de ranking
            $puntajeAnterior = DB::table('ranking')->where('usuario', '=', Auth::user()->user)->value('puntaje'); //busca su puntaje guardado en ranking
            $puntaje = session()->get('puntaje', 0);
            session(['mejorPuntaje' => $puntajeAnterior]);
            if($usuarioEncontrado != '') // si es distinto de null es porque ya existe el usuario en la tabla de ranking
            {
                if($puntaje > $puntajeAnterior) //si el puntaje obtenido es mayor al registrado en la base lo reemplaza, sino solo muestra el resultado y se mantiene el mejor guardado para ver en el ranking
                {
                    DB::table('ranking')->where('usuario', '=', Auth::user()->user)->update(['puntaje' => $puntaje]);
                    session(['mejorPuntaje' => $puntaje]);
                    return view('questionrace.resultado');
                }
                else{
                    return view('questionrace.resultado');
                }
            }
            else{ // si no existe el usuario en la tabla de ranking lo genera
                $puntajeFinal = new Ranking;
                $puntajeFinal->usuario = Auth::user()->user;
                $puntajeFinal->puntaje = $puntaje;
                session(['mejorPuntaje' => $puntaje]);
                $puntajeFinal->save();
                return view('questionrace.resultado');
            }
        }
    }
    public function proximo(Request $req){
        $preguntaAnterior = $req['id'];
        $pregunta = DB::table('preguntas')->where('id', '=', $preguntaAnterior + 1)->first();
        $respuestas = DB::table('respuestas')->where('id_pregunta', '=', $pregunta->id)->get();
      //if($pregunta == null)
        return view('questionrace.ganaste', compact('pregunta', 'respuestas'));
    }
}
