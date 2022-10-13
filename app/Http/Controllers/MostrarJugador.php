<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MostrarJugador extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }*/


    public function llistaJugadors() {
		$jugadors = \App\Jugador::orderBy('dorsal','ASC')->paginate(10);
		return view('jugadors',array('listado'=>$jugadors));
	}
}
