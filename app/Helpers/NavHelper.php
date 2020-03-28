<?php


/**
 * Descripción: obtener nombre de enlace y rutas para navbar
 * Entrada/s: string nombre de enlace
 * Salida: arreglo asociativo con nombre y ruta
 */
function obtenerEnlacesNav($nombre)
{
	switch ($nombre) {
		case "Usuario":
			return array('Actualizar Datos'=>'home','Cambiar Contraseña'=>'home','Salir'=>'logout');
		break;		
		case "Socios":
			return array('Incorporar'=>'socios.create','Listar'=>'home','Buscar'=>'home');
		break;
		case "Préstamos":
			return array('Solicitar'=>'home','Listar'=>'home','Buscar'=>'home');
		break;
		case "Contabilidad":
			return array('Registrar'=>'home','Listar'=>'home','Buscar'=>'home','Conciliación'=>'home','Anular'=>'home');
		break;   	 
		case "Estadísticas":
			return array('Sede - Área'=>'home','Comuna - Ciudad'=>'home','Cargo'=>'home','Incorporación - Desvinculación'=>'home','Nacionalidad'=>'home','Estudios'=>'home','Cargas'=>'home');
		break;    
		case "Administración":
			return array('Socios'=>'home','Usuarios'=>'home','Estudios'=>'home','Préstamos'=>'home','Contabilidad'=>'home','Historial'=>'home');
		break;   		     
	}
}
