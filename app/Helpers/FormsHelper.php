<?php


/**
 * Descripción: Obtener ruta de include que cargara atributo @CSRF
 * Entrada/s: string con nombre de acción put o delete
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


/**
 * Descripción: Obtener ruta para cargar formulario
 * Entrada/s: string con titulo de formulario
 * Salida: string con ruta
 */
function obtenerRutaFormulario($nombre)
{
	switch ($nombre) {
	    case "Iniciar Sesión":
	    	return 'inc.forms.contenidos.auth.login';
	        break;
	    case "Restablecer Contraseña":
	    	return 'inc.forms.contenidos.auth.restablecer_pass';
	        break;
	    case "Registrar Socio":
	    	return 'inc.forms.contenidos.socio.create';
	        break;	        
	}
}

