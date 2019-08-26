<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Farmaco extends Model
{
    protected $table = 'farmacos';
    protected $fillable = [
    	'id',
    	'nombre',
    	'descripcion',
    	'laboratorio_id'

    	
    ];

    public function laboratorio(){
    	return $this->belongsTo('App\Models\Laboratorio');
    }

}
