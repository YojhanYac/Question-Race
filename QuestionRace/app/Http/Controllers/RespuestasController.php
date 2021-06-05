<?php

namespace App\Http\Controllers;

use App\Respuesta;
use App\Pregunta;
use Illuminate\Http\Request;

class RespuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $respuesta = Respuesta::all();
        return view('questionrace.admin.preguntas', compact('respuestas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargarrespuesta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $preguntas = DB::table('preguntas')
        ->orderBy('id', 'desc')
        ->first();
        $respuesta->validacion = 'i';
        $respuesta->id_pregunta = $preguntas->id;
        $respuesta->save();
        $respuesta = new Respuesta;
        $respuesta->respuesta = $request->rta2;
        $respuesta->validacion = 'i';
        $respuesta->id_pregunta = $preguntas->id;
        $respuesta->save();
        $respuesta = new Respuesta;
        $respuesta->respuesta = $request->rtaC;
        $respuesta->validacion = 'c';
        $respuesta->id_pregunta = $preguntas->id;
        $respuesta->save();
        $respuesta->respuesta = $request->rta1;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function show(Respuesta $respuesta)
    {
        $respuesta = Respuesta::where('respuesta', 'like', '%' . $respuesta . '%')->get();
        return view('index', compact('respuestas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $respuestas = Respuesta::findOrFail($id);
        //dd($respuestas);
        return view('questionrace.admin.editarpregunta',compact('respuestas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Respuesta $respuesta)
    {
        $respuesta = Respuesta::find($request);

        $respuesta->name = 'respuesta';

        $respuesta->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Respuesta::destroy($id);
                        //ALTER TABLE ranking DROP id;
                //ALTER TABLE ranking ADD id int not null auto_increment primary key first;
        return redirect('/admin');
    }
}
