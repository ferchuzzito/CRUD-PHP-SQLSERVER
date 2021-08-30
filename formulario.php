<!DOCTYPE html> 
<?php 
	include("ConexionSQL_SERVER.php");
?>
<meta charset="UTF-8">
<html> 	
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>CRUD PHP & SQL SERVER</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">     			
	</head>
<body>
	<div class="col-md-8 col-md-offset-2">
		<h1>CRUD CON PHP Y SQL SERVER</h1>

		<form method="POST" action="formulario.php">
			<div class="form-group">
				<label>Nombre:</label>
				<input type="text" name="nombre" class="form-control" placeholder="Escriba su nombre"><br />
			</div>
			<div class="form-group">
				<label>Contraseña:</label>
				<input type="text" name="passw" class="form-control" placeholder="Escriba su contraseña"><br />
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input type="text" name="email" class="form-control" placeholder="Escriba su email"><br />
			</div>
			<div class="form-group">				
				<input type="submit" name="insert" class="btn btn-warning" value="INSERTAR DATOS"><br />
			</div>
		</form>
	</div>
<br /><br /><br />

	<?php
		if(isset($_POST['insert'])){
			include("insert.php");
		}

	?>

	<div class="col-md-8 col-md-offset-2">
	<table class="table table-bordered table-responsive">
		<tr>
			<td>ID</td>
			<td>Usuario</td>
			<td>Password</td>
			<td>Email</td>
			<td>Acción</td>
			<td>Acción</td>
		</tr>

		<?php
			$consulta = "SELECT * FROM usuarios";

			$ejecutar = sqlsrv_query($conn_sis, $consulta);

			$i = 0;

			while($fila = sqlsrv_fetch_array($ejecutar)){
				$id = $fila['idUsuario'];
				$usuario = $fila['usuario'];
				$password = $fila['password'];
				$email = $fila['email'];
				$i++;
			

		?>

		<tr align="center">
			<td><?php echo $id; ?></td>
			<td><?php echo $usuario; ?></td>
			<td><?php echo $password; ?></td>
			<td><?php echo $email; ?></td>
			<td><a href="formulario.php?editar=<?php echo $id; ?>">Editar</a></td>
			<td><a href="formulario.php?borrar=<?php echo $id; ?>">Borrar</a></td>
		</tr>

		<?php } ?>

	</table>
	</div>

	<?php
		if(isset($_GET['editar'])){
			include("editar.php");
		}

	?>	
	<?php	
	if(isset($_GET['borrar'])){
		include("borrar.php");
		}
?>
</body>
</html>



