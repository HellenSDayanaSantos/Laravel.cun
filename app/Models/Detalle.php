<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
     
    protected $table = 'detalles';

    protected $fillable =[
    	'producto',
        'descripcion',
    	'venta_id',	
    ];

    protected $hidden = ['crated_at','updated_at'];

     public function venta(){

        return $this->belongsTo('App\Models\Venta','venta_id');
    }
     
     public function setDescripcionAttribute($value){
        $this->attributes['descripcion'] = ucfirst($value);
    }

    protected $casts = [
        'producto' => 'array'

    ];
}
