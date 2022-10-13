<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsertarEquip extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function insertar(){

        return view('/insertarEquip');
    }
    
    public function insertado(){

        request()->validate([
            'nombre' => 'required',
            'ciudad' => 'required'
        ]);
        


        \App\Equip::create([

            'nombre' => request('nombre'),
            'ciudad' => request('ciudad'),
        ]);

        return view('/update');

    }

    public function messages(){
        return [
            'nombre.required' => 'Es necesario insertar el nombre'
        ];
    }
}
