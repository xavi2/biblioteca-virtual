<!DOCTYPE html>
<html>
<head>
	<title>Usuarios Irregulares : Biblioteca-Virtual</title>

</head>
<body>
	<?php
		global $connection;
		$connection = mysqli_connect("localhost", "root", "", "biblioteca-virtual");
		
		if (mysqli_connect_errno()){
			echo "<p> Connection Failed </p>";
		}

		$result = mysqli_query($connection, "SELECT * FROM USUARIO");

		echo "<table border = '1px'
		<tr>
			<th>Nombre de usuario</th>
			<th>Estado:</th>
			<th></th>
		</tr>
		";

		while ($row = mysqli_fetch_array($result)){

			if ($row['estado'] != 'habilitado'){
				echo "<tr>";

				echo "<td>". $row['nombre']." ".$row['apellido_Pat']." ".$row['apellido_Mat']."</td>";
				echo "<td>". $row['estado']."</td>";
				echo "<td>";

				echo '<form action = "deleteUser.php" method = "POST">
			
						<input type="hidden" name="idUser" value='.$row['ci'].'>
						<input type="submit" value="Eliminar">

					</form>';

				echo "</td>";
				echo "</tr>";
			}
		}


	?>


</body>
</html>