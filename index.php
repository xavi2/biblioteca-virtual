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
	<link rel = "stylesheet" type="text/css" href = "styles/index.css">
</head>
<body>
	<div>
		<h1>Biblioteca Virtual <span>Tu Vieja</span></h1>
		<button> <a href="login.php">Iniciar Sesion </a></button>
	</div>
</body>