<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsertarJugador extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function insertar(){

        return view('/insertarJugador');
    }
    
    public function insertado(){

        request()->validate([
            'nombre' => 'required',
            'nacionalidad' => 'required',
            'dorsal' => 'required',
            'equip_id' => 'required'
        ]);
        


        \App\Jugador::create([

            'nombre' => request('nombre'),
            'nacionalidad' => request('nacionalidad'),
            'dorsal' => request('dorsal'),
            'equip_id' => request('equip_id')

        ]);

        return view('/update');

    }

    public function messages(){
        return [
            'nombre.required' => 'Es necesario insertar el nombre'
        ];
    }
}
