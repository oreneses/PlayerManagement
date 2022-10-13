<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Jugador;

class EditarJugador extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function editar(){
		$jugadors = \App\Jugador::orderBy('dorsal','ASC')->paginate(10);
		return view('editarJugador',array('listado'=>$jugadors));	
    }
    
    public function edit(Jugador $id){
        $x = \App\Jugador::find('id');
		return view('edit',['id'=>$id]);	
    }
    
    public function update(Jugador $id){
		    $id->update([
          'nombre'=>request('nombre'),
          'nacionalidad'=>request('nacionalidad'),
          'dorsal'=>request('dorsal')
        ]);

    return view('/update');
    }
    

}
