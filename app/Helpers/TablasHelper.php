<?php


/**
 * Descripción: obtener nombre de enlace y rutas para nav de administración
 * Entrada/s: string nombre de enlace
 * Salida: arreglo asociativo con nombre y ruta
 */
function obtenerEnlacesAdministracion($nombre)
{
	switch ($nombre) {   
		case "socios":
			return array('Área'=>'home','Cargo'=>'home','Estado Socio'=>'home','Nacionalidad'=>'home','Sede'=>'home');
		break;   
		case "estudios":
			return array('Nivel Académico'=>'home');
		break; 	
		case "prestamos":
			return array('Forma de Pago'=>'home');
		break; 						     
	}
}	

/**
 * Descripción: obtener nombre de enlace y rutas para nav de administración
 * Entrada/s: string nombre de enlace
 * Salida: arreglo asociativo con nombre y ruta
 */
function obtenerCamposFiltro($nombre)
{
	switch ($nombre) {   
		case "socios_filtro":
			return array('nombre'=>'Nombre','apellido'=>'Apellido');
		break;   	
		case "estudios_filtro":
			return array('estudio'=>'Estudio');
		break; 	  
		case "prestamos_filtro":
			return array('prestamo'=>'Préstamo');
		break;    
	}
}

/**
 * Descripción: obtener nombre de enlace y rutas para nav de administración
 * Entrada/s: string nombre de enlace
 * Salida: arreglo asociativo con nombre y ruta
 */
function obtenerCabecerasTabla($nombre)
{
	switch ($nombre) {
		case "sede":
			return array('Nombre', 'Apellido', 'Rut', 'Correo', 'Dirección');
		break;	
		case "estudio":
			return array('Nivel Académico');
		break;
		case "prestamo":
			return array('Forma de Pago');
		break;					  		     
	}
}