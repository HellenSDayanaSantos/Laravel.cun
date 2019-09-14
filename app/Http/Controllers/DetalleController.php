<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detalle;

class DetalleController extends Controller
{
	public function index()
	{
		$detalle = Detalle::find(3);
    return $detalle;
}
    
}
