<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{

    protected $fillable = ['nombre', 'nacionalidad', 'dorsal', 'equip_id'];

    //
    public function equip() {
		return $this->belongsTo('App\Equip');
	}

}
