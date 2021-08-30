<?php
	$serverName = "localhost";
	$connectionInfo = array("Database"=>"prueba_usuarios", "UID"=>"prueba2", "PWD"=>"prueba23*", "CharacterSet"=>"UTF-8");
	$con = sqlsrv_connect($serverName, $connectionInfo);

	if($con){
		echo "conexión exitosa";
	}else{
		echo "fallo en la conexión";
	}

?>