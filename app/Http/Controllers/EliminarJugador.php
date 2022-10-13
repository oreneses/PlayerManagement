<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EliminarJugador extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function eliminar(){
		return view('eliminarJugador');	
	}
}
