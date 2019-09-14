<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'vendedores';

    protected $fillable = [
    	'nombre',
    	'direccion',
    	'telefono'
    ];

    protected $appends = [
        'nombre_direccion'];

    protected $hidden = ['created_at','updated_at'];

    public function ventas()
    {
    	return $this->hasMany('App\Models\Venta');
    }

    public function getNombreDireccionAttribute()
    {
        return "{$this->nombre} {$this->direccion}";
    }
}
