<?php

	/*$servidor = "localhost";
	$usuario = "nemesis";
	$contrasenha = "123";
	$BD = "imagen";

	$conexion = @mysql_connect($servidor, $usuario, $contrasenha);

	if(!$conexion){
		die('<strong>No se pudo conectar:</strong>'.mysql_error());
	}else{
		echo'Conectado satisfactoriamente al servidor'<br/>;
	}
	mysql_select_db($BD, $conexion) or die(mysql_error($conexion));*/
	$conexion = new mysqli("localhost","nemesis","123","imagen");

	if($conexion){
		
	}else{
		echo"Conexión no exitosa";
	}

?>