<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\PerfilUsuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

class PerfilUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('questionrace.perfilUsuario');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questionrace.faq');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PerfilUsuario  $perfilUsuario
     * @return \Illuminate\Http\Response
     */
    public function show(PerfilUsuario $perfilUsuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PerfilUsuario  $perfilUsuario
     * @return \Illuminate\Http\Response
     */
    public function edit(PerfilUsuario $perfilUsuario)
    {
        //$datos = DB::table('Users')->where('user', 'like', Auth::user()->user)->get();
        //echo $datos;

        //return view('questionrace.perfilUsuario');
      //  $respuestas = DB::table('respuestas')->where('id_pregunta', '=', $id)->get();
       //dd($pregunta->respuestas, $respuestas );
        //$rtas = $respuestas->toArray();
       // return view('questionrace.admin.editarpregunta',compact('pregunta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PerfilUsuario  $perfilUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PerfilUsuario $perfilUsuario)
    {
        var_dump($_POST);
        return view('questionrace.perfilUsuario');
       /* $pregunta = Pregunta::findOrFail($request->id);
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
        return redirect('/preguntas')->with('update', 'Modificacion Exitosa');*/
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PerfilUsuario  $perfilUsuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(PerfilUsuario $perfilUsuario)
    {
        //
    }
}
