<?php

namespace App\Http\Controllers;

use App\Pregunta;
use App\Respuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Pregunta::all();
        $respuestas = Respuesta::all();
        return view('questionrace.admin.preguntas', compact('preguntas','respuestas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questionrace.cargarpreguntas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pregunta = new Pregunta;
        $pregunta->pregunta = $request->pregunta;
        $pregunta->save();
/*
        $preguntas = DB::table('preguntas')
                ->orderBy('id', 'desc')
                ->first(); */
                foreach ($request->rta as $key => $rta) {
                    $respuesta = new Respuesta;
                    $respuesta->respuesta = $rta;
                    $respuesta->validacion = ($key == 'C') ? 'c' : 'i' ;
                    $respuesta->id_pregunta = $pregunta->id;
                    $respuesta->save();
                }


                return view('questionRace.cargarpreguntas',['mensaje' => 'Registro cargado con exito']);
            }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function show(Pregunta $pregunta)
    {
        $preguntas = Pregunta::where('pregunta', 'like', '%' . $pregunta . '%')->get();
        return view('index', compact('preguntas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pregunta = Pregunta::findOrFail($id);
        $respuestas = DB::table('respuestas')->where('id_pregunta', '=', $id)->get();
       //dd($pregunta->respuestas, $respuestas );
        //$rtas = $respuestas->toArray();
        return view('questionrace.admin.editarpregunta',compact('pregunta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $pregunta = Pregunta::findOrFail($request->id);
        $pregunta->pregunta = $request->pregunta;
        $pregunta->save();
        $update="Ok";
        $arrayId = [];
        $posicionArray = 0;
        foreach($pregunta->respuestas as $v1) {
            $arrayId[] = $v1->id;
        }
        foreach($request->rta as $rta) {
            $respuesta = $pregunta->respuestas->firstWhere('id',$arrayId[$posicionArray]);
                $posicionArray++;
                if(is_object($respuesta)){
                    $respuesta->respuesta = $rta['respuesta'];
                    $respuesta->save();
                }

            }
        return redirect('/preguntas')->with('update', 'Modificacion Exitosa');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pregunta::destroy($id);
                        //ALTER TABLE ranking DROP id;
                //ALTER TABLE ranking ADD id int not null auto_increment primary key first;
        $delete='ok';
        return redirect('/preguntas')->with('delete', 'Eliminacion exitosa');
    }
}
