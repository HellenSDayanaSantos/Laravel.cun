<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    protected $table = 'laboratorios';
    protected $fillable = [
    	'nombre'
    ];

    public function farmacos(){
    	return $this->hasMany('App\Models\Farmaco');
    }
}
