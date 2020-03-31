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
    function sociosArea(Request $request)
    {
    	return view('app.administracion.socios.area');
    }

    /**
     * Descripción: Muestra página de mantenedor estudios realizados
     * Entrada/s: request
     * Salida: llamada a vista
     */
    function estudiosNivel(Request $request)
    {
    	return view('app.administracion.estudios.nivel');
    }

    /**
     * Descripción: Muestra página de mantenedor de préstamos
     * Entrada/s: request
     * Salida: llamada a vista
     */
    function prestamosFormaPago(Request $request)
    {
        return view('app.administracion.prestamos.forma_pago');
    }
    
}
