<?php

/**
 * @author genshiken
 * @copyright 2014
 */
 //creamos la coneccion al servidor de base de datos comoususario root
 $conexion=mysql_connect("localhost","root","");
 //verificamos la conexion con el servidor
 if(!$conexion)
       die("no ha podido conectar".mysql_error());
 //conectamos con nuestra base de datos bilioteca-virtual
 mysql_select_db("biblioteca-virtual",$conexion);

 /*creamos la conexion
$conn=new mysql_connect("localhost","root","root");
if(mysql_errno()){
    echo("No se ha podido conectar");
    exit();    
}

if(!$conn){
    die('no he conectado');
}
mysqli_select_db("biblioteca-virtual",$conn);
verificamos
*/
//enviar Regitro Completado Correcamente
function enviar_email_no($email,$nombre_usuario,$contrasenia){
                $destinatario=$email;
                $asunto="Vaidacion de la cuenta en la biblioteca Virtual ...";
                $mensage="Su cunta en la biblioteca virtual no fue validada con exito por falta de pago";
                mail($destinatario,$asunto,$mensage,$headers);
}

 
//enviar Regitro Completado Correcamente
function enviar_email_si($email,$nombre_usuario,$contrasenia){
                $destinatario=$email;
                $asunto="Vaidacion de la cuenta en la biblioteca Virtual ...";
                $mensage="Su cunta en la biblioteca virtual esta validada con el password:"
                          .$nombre_usuario." \n y la contrasenia:".$contrasenia."\n en fecha:".date(dFY);
                mail($destinatario,$asunto,$mensage,$headers);
}
?>