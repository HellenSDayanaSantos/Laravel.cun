<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;

class VentaController extends Controller
{
	public function index()
	{
		$Venta = Venta::find(3);
    return $Venta;
     }
    
}