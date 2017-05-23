<?php 
	
	$hostdb = "localhost";
	$baseDatos = "agrarian";
	$usuariodb = "root";
	$clave = "";
	$tabla_1 = "permisos";
	$tabla_2 = "almacen_producto_view";
	$tabla_3 = "almacen";
	$tabla_clientes = "cliente";

	$conexion_db = new mysqli("$hostdb","$usuariodb","$clave","$baseDatos");
	if ($conexion_db->connect_errno) {

		echo "Fallo la conexion a la base de datos";
	}
?>