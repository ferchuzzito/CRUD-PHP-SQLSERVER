<?php
		if(isset($_POST['insert'])){
			$usuario = $_POST['nombre'];
			$pass = $_POST['passw'];
			$email = $_POST['email'];

			$insertar = "INSERT INTO  usuarios(usuario, password, email)VALUES('$usuario', '$pass', '$email')";

			$ejecutar = sqlsrv_query($conn_sis, $insertar);

			if($ejecutar){
				echo "<h3>Insertado correctamente</h3>";
			}

		}

	?>