<!DOCTYPE html>

<head>
	
	<?php

		global $title, $match;
		$connection = mysqli_connect("localhost", "root", "", "biblioteca-virtual");

		if (mysqli_connect_errno()){
		echo "<p> Connection Failed </p>";
		}
		else {
			echo "<p> Connection succesfull </p>";
		}

		$query = "SELECT * FROM usuario";
		$result = mysqli_query($connection, $query);
		$match = false;

		while ($usr = mysqli_fetch_array($result)){
			$GLOBALS['match'] = $usr['password'] == $_POST['password'];
		}

		if ($match){
			$GLOBALS['title'] = "Bienvenido ".$_POST['username'];
		}
		else{
			$GLOBALS['title'] = "Fallo Login";
		}

		echo "<title> $title : Biblioteca-virtual</title>";
	?>
</head>