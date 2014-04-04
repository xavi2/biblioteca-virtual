<!DOCTYPE html>

<?php
	global $connection;
	$connection = mysqli_connect("localhost", "root", "", "biblioteca-virtual");
	
	if (mysqli_connect_errno()){
		echo "<p> Connection Failed </p>";
	}
?>

<head>
	
	<title>Biblioteca Virtual</title>
	<style type="text/css" src = "styles/index.css"></style>
</head>
<body>
	
	<button> <a href="login.php">Iniciar Sesion </a></button>

</body>