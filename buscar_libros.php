<html>
<head>
<title>Biblioteca Virtual</title>
<style type="text/css">
   body{background-image:url("images/biblioteca.jpg")}
  </style>
</head>
<link rel="stylesheet" type="text/css" href="styles/styleBuscar.css">
<body>
   <form action="buscar_libros.php" method="GET">
   <h1> BUSCADOR DE LIBROS </h1>
   <div id="contenido">
       <label>BUSCAR POR:</label><select name="buscar_por" >
                   <option value="autor"> autor</option>
                   <option value="genero">genero</option>
                   <option value="titulo">titulo</option>
                   <option value="mostrarTodos">mostrar Todos</Option>
                   </select ><br>
   <input required type="text" class="campo"id="txtBusqueda" name="textobusqueda"  placeholder="libro a buscar"/>
   <input type="submit" name="" value="BUSCAR" />
   </form>
<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt"><tr>
<td><font face="verdana"><b>titulo</b></font></td>
<td><font face="verdana"><b>autor</b></font></td>
<td><font face="verdana"><b>genero</b></font></td>
</tr>



<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 $buscar_por = $_GET['buscar_por'];
 $txt_buscar = $_GET['textobusqueda'];
 if ($buscar_por == "") $buscar_por = "mostrarTodos"; 
 //echo"se buscara por : ".$buscar_por." lo siguiente: ".$txt_buscar;

 
 $db = new mysqli('localhost', 'root', '','biblioteca-virtual');
// El primer parámetro es el host en donde se encuentra la base de datos
// El segundo parámetro es el usuario con el que se desea conectar
// El tercer parámetro es la clave del usuario 
// El cuarto es la base de datos que se desea utilizar
 
 
// Por ultimo se debe revisar si la conexión se realizo sin ningún problema 
// para esto se hace uso de la propiedad 'connect_errno' sobre el objeto 
// de la conexión a la base de datos
if($db->connect_errno > 0){
    die('Ocurrio un problama con los servidores, por favor intente luego [' . $db->connect_error . ']');
    // Si se consiguió algún error entonces se muestra cual fue
}
 if($buscar_por=='genero'){
       $sql = "SELECT titulo,autor,genero FROM LIBRO WHERE genero='".$txt_buscar."'";
       //echo "SQL1= genero"."<br />";
 }else{
       if($buscar_por=='autor'){
       $sql = "SELECT titulo,autor,genero FROM LIBRO WHERE autor='".$txt_buscar."'";
        //echo "SQL2=autor"."<br />";
       }else{
             if($buscar_por=='titulo'){
               $sql = "SELECT titulo,autor,genero FROM LIBRO WHERE titulo ='".$txt_buscar."'";
              
         }else{if($buscar_por=='mostrarTodos'){
                $sql = "SELECT * FROM LIBRO";
          }
           
         }
        }
       }

       
 if(!$resultado = $db->query($sql)){
    die('Ocurrio un error ejecutando el query [' . $db->error . ']');
}
 
 $numero = 0;
while($fila = $resultado->fetch_assoc()){
    
   echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
      $fila["titulo"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $fila["autor"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $fila["genero"] . "</font></td>";
    $numero++;
  }
if($numero==0){
echo"------ NO SE ENCONTRARON LIBROS CON ESA DESCRIPCION -----------";
}
      echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Numero: " . $numero . 
      "</b></font></td></tr>";
 $db->close();

?>

</body>
</html>

