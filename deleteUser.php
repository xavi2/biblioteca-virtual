<?php
	global $connection;
		$connection = mysqli_connect("localhost", "root", "", "biblioteca-virtual");
	
	mysqli_query($connection, "DELETE FROM USUARIO WHERE ci = ".$_POST['idUser']);
	mysqli_close($connection);
	header('Location: unableUsers.php');
	die();
?>