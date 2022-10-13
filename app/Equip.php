<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equip extends Model
{
    //

    protected $fillable = ['nombre', 'ciudad'];

    public function jugadors() {
		return $this->hasMany('App\Jugador');
	}
}
