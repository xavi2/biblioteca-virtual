<!DOCTYPE HTML>

	<head>
	<link rel=stylesheet href="styles/estiloRegUsr.css" type="text/css" />
    <script src=""> </script>
	</head>
	<body>
		<header>
            
        :invalid{
            border-color: red;
            box-shadow: 0px 0px 5px red;
        }
			
           		
		</header>
		
		<div id="cajaheader">
        <h1><p align="center">Registro de usuarios</p></h1>
        
		<form action="validarRegistroUsuario.php" method= "POST">
				
				 <li><label for="Nombre"> NOMBRE : </label><input  type="text" name="nombre" placeholder="Escriba aqui . . . . . . . . . . . . . . . . . " required pattern="[a-z A-Z_ñÑáéíóúÁÉÍÓÚ]{3,30}"><spam class="form_hint">* EJEMPLO :  juan </spam></li>         
				
				<li><label for="ap"> APELLIDO PAT. : </label><input  type="text" name="ap" placeholder="Escriba aqui . . . . . . . . . . . . . . . . . " required pattern="[a-z A-Z_ñÑáéíóúÁÉÍÓÚ]{3,30}"><spam class="form_hint">* EJEMPLO :  perez </spam></li>
                
				<li><label for="am"> APELLIDO MAT. : </label><input  type="text" name="am" placeholder="Escriba aqui . . . . . . . . . . . . . . . . . " required pattern="[a-z A-Z_ñÑáéíóúÁÉÍÓÚ]{3,30}"><spam class="form_hint">* EJEMPLO :  salas </spam></li>
				
				 <li><label for="ci"> C.I. :</label><input type="text"  name="ci" pattern="[0-9]{7,15}" placeholder="Escriba aqui . . . . . . . . . . . . . . . . ." required><spam class="form_hint"> * MÍNIMO 7 DIGITOS </spam> </li>
				
				 <li><label for="email"> Email :</label><input type="email"  name="email" placeholder="Escriba aqui . . . . . . . . . . . . . . . ." required pattern="[a-zA-Z0-9_-]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"><spam class="form_hint">* EJEMPLO :ejemplo@GMAIL.COM </spam></li>
				
				<li><label for="login">ID.USUARIO: </label> <input type="text"  name="login" placeholder="Escriba aqui . . . . . . . . . . . . . . . . . " required pattern="[a-zA-Z0-9_ñÑáéíóúÁÉÍÓÚ-]{3,10}"><spam class="form_hint">* (3-10 CARACTERES PERMITIDOS) EJEMPLO => juan_2014</spam></li>
				
				<li><label for="Contraseña"> CONTRASEÑA :</label> <input  type="password" name="password" placeholder="Escriba aqui . . . . . . . . . . . . . . . . . "  required pattern="[a-zA-Z0-9]{6,20}"><spam class="form_hint">* (6-20 CARACTERES PERMITIDOS)</spam></li>
				
				<li><label for="idpago"> ID. PAGO :</label><input type="text"  name="idpago" pattern="[0-9]{7,15}" placeholder="Escriba aqui . . . . . . . . . . . . . . . . ." required><spam class="form_hint"> * MÍNIMO 7 DIGITOS </spam> </li>
                
				<input src="validarRegistroUsuario.php" type = "submit" value="registrar" class = "centered">
                
			</form>
		</div>	
				
			
	</body>
