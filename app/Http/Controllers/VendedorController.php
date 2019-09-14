<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;

class VendedorController extends Controller
{
	public function index()
	{
		$vendedor = Vendedor::find(3);
    return $vendedor;
     }
    
}