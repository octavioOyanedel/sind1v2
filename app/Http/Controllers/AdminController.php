<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    /**
     * Descripción: Muestra página de mantenedor socio
     * Entrada/s: request
     * Salida: llamada a vista
     */
    function socios(Request $request)
    {
    	return view('app.administracion.socios.index');
    }
    
}
