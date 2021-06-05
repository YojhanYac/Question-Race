<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    public $table = 'respuestas';
    public $guarded = [];

    public function pregunta(){
        return $this->belongsTo(Pregunta::class, 'id_pregunta');
    }
}
