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
 $bucar_por = $_GET['buscar_por'];
 $txt_buscar = $_GET['textobusqueda'];
 
 //echo"se buscara por : ".$bucar_por." lo siguiente: ".$txt_buscar;

 
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
}else{
    echo ' Conectado'."<br />";
    // Si no se consigue algún error entonces la conexión se realizo correctamente 
}
 if($bucar_por=='genero'){
       $sql = "SELECT titulo,autor,genero FROM LIBRO WHERE genero='".$txt_buscar."'";
       //echo "SQL1= genero"."<br />";
 }else{
       if($bucar_por=='autor'){
       $sql = "SELECT titulo,autor,genero FROM LIBRO WHERE autor='".$txt_buscar."'";
        //echo "SQL2=autor"."<br />";
       }else{
             if($bucar_por=='titulo'){
               $sql = "SELECT titulo,autor,genero FROM LIBRO WHERE titulo ='".$txt_buscar."'";
              
         }else{if($bucar_por=='mostrarTodos'){
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
