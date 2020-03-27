<?php


/**
 * Descripción: Obtener ruta de include que cargara atributo @CSRF
 * Entrada/s: nombre de acción put o delete
  * Salida: string con nombre de ruta para completar include, por defecto retorna post
 */
function obtenerCsrf($nombre)
{		
	switch ($nombre) {
	    case "put":
	        return 'inc.forms.csrf.put';
	        break;
	    case "delete":
	        return 'inc.forms.csrf.delete';
	        break;	       
	    default:
	        return 'inc.forms.csrf.post';
	}
}
