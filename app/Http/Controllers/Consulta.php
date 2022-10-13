<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jugador;
use App\Equip;

class Consulta extends Controller
{

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/


    public function opciones(Request $request) {

        return view('consultarOptions');
    }

    public function buscadorJugador(Request $request) {

        $nombre = $request->get('nombre');
      
        $query = Jugador::where('nombre','like',"%$nombre%")->paginate(5);

        return view('consulta',array('listado'=>$query));
    }
    
    public function buscadorNacionalitat(Request $request) {

        $nacionalidad = $request->get('nacionalidad');
        
        $query = Jugador::where('nacionalidad','like',"%$nacionalidad%")->paginate(5);

        return view('consultaNacionalitat',array('listado'=>$query));
    }
        
    public function buscadorDorsal(Request $request) {

        $dorsal = $request->get('dorsal');
        
        $query = Jugador::where('dorsal','like',"%$dorsal%")->paginate(5);

        return view('consultaDorsal',array('listado'=>$query));
    }

    public function buscadorEquip(Request $request) {

        $nombre = $request->get('nombre');
      
        $query = Equip::where('nombre','like',"%$nombre%")->paginate(5);

        return view('consultaEquip',array('listado'=>$query));
    }

    public function buscadorCiutatEquip(Request $request) {

        $nombre = $request->get('nombre');
      
        $query = Equip::where('ciudad','like',"%$nombre%")->paginate(5);

        return view('consultaCiutatEquip',array('listado'=>$query));
    }
        
}
