<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MostrarEquip extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function llistaEquips() {
		$jugadors = \App\Equip::orderBy('nombre','ASC')->paginate(5);
		return view('equips',array('llistat'=>$jugadors));
	}
}
