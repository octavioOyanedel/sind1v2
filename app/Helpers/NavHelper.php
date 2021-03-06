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
			return array('Solicitar'=>'prestamos.create','Listar'=>'home','Buscar'=>'home');
		break;
		case "Contabilidad":
			return array('Registrar'=>'contables.create','Listar'=>'home','Buscar'=>'home','Conciliación'=>'home','Anular'=>'home');
		break;   	 
		case "Estadísticas":
			return array('Sede - Área'=>'home','Comuna - Ciudad'=>'home','Cargo'=>'home','Incorporación - Desvinculación'=>'home','Nacionalidad'=>'home','Estudios'=>'home','Cargas'=>'home');
		break;    
		case "Administración":
			return array('Socios'=>'admin.socios.area','Usuarios'=>'home','Estudios'=>'admin.estudios.nivel','Préstamos'=>'admin.prestamos.forma.pago','Contabilidad'=>'home','Historial'=>'home');
		break;   		     
	}
}
