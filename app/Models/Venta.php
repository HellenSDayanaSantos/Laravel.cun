<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    
    protected $table = 'ventas';

    protected $fillable =[
    	'fecha',
        'is_credito',
    	'cantidad',
    	'telefono',
    	'vendedor_id'
    ];
     
    protected $casts = [
        'is_credito' => 'boolean'

    ];

    protected $hidden = [
       'created_at', 'updated_at',
    ];

    protected $appends = [
        'list_vendedor','list_detalles'];

    public function vendedor(){
        return $this->belongsTo('App\Models\Vendedor','vendedor_id');
    }

    public function detalles(){
        return $this->hasMany('App\Models\Detalle');
    }

    public function getListVendedorAttribute()
    {
        return $this->vendedor;
    }

    public function getListDetallesAttribute()
    {
        return $this->detalles;
    }


}
