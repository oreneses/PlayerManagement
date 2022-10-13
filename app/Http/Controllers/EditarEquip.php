<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Equip;

class EditarEquip extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function editar(){
		$equips = \App\Equip::orderBy('nombre','ASC')->paginate(10);
		return view('editarEquip',array('listado'=>$equips));	
    }
    
    public function edit(Equip $id){
        $x = \App\Equip::find('id');
		return view('editEquip',['id'=>$id]);	
    }
    
    public function update(Equip $id){
		    $id->update([
          'nombre'=>request('nombre'),
          'ciudad'=>request('ciudad')
        ]);

    return view('/update');
    }
}
