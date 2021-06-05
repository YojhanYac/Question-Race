<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Ranking;

class RankingController extends Controller
{
    public function listado() {
    	$a = 0;
   		$ranking = Ranking::orderBy('puntaje', 'desc')->paginate(10);
    return view('questionrace.ranking', compact('ranking', 'a'));
  }
  
}

