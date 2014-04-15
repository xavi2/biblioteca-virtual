<!DOCTYPE html>

<head>
	
	<title> <?php if ($_POST['title']) 
				echo($_POST['title'] . " - ");
			?> Biblioteca Virtual	</title>
	<link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
	<link rel = "stylesheet" type="text/css" href = "styles/index.css">

	<script type="text/javascript" src = "jquery/jquery.js"></script>
</head>
<body>

	<script type="text/javascript">
	 $(function(){
	 	var status = 0;
	 	$('#login').hide();
	 	$('#boton').click(slideLogin);

	 	function slideLogin(){
	 		status++;
	 		$('#login').stop().fadeToggle(400, changeArrow);
	 		
	 	}

	 	changeArrow();

	 	function changeArrow(){
	 		console.log(status);
			var boton = $('#arrow');

	 		if (status % 2 == 0)
	 			document.getElementById("arrow").innerHTML = ">";
	 		else
	 		if (status % 2 == 1)
	 			document.getElementById("arrow").innerHTML = '<';

	 	}
	 });
	</script>

	<h3>Bienvenido!</h3>
	<div class = "frame">
		<h1>Biblioteca Virtual: <span id = "tu-vieja">Tu <br> Vieja</span></h1>
		<div class = "clear"></div>
		<span id = "boton">Iniciar Sesion  <span id = 'arrow'> > </span> </span>

		
	</div>
	<div id = 'login'>
			<form action="validarUsuario.php" method= "POST">
				<div>
				<span>Nombre de usuario: </span>
				<input type = "text" name = "username"> <br>
				</div>
				<div>
				<span>Contrasen&#771;a:</span>
				<input type = "text" name = "password"> <br>
				</div>

				<input type = "submit" class = "centered">

			</form>
		</div>
</body>