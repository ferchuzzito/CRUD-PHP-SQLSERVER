<?php	
	if(isset($_GET['borrar'])){

			$borrar_id = $_GET['borrar'];

			$borrar = "DELETE FROM usuarios WHERE idUsuario='$borrar_id'";
			
			$ejecutar = sqlsrv_query($conn_sis, $borrar);

			if($ejecutar){
				echo "<script>alert('El usuario ha sido borrado')</script>";
				echo "<script>window.open('formulario.php', '_self')</script>";
			}	
		}
?>