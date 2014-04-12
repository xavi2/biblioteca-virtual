<?php

/**
 * @author ruben
 * @copyright 2014
 */
    //validacion de nombres########################################################
    //verificamos si los formularios no estan vacios----------------------
    if(isset($_POST["passwordlog"])&&isset($_POST["userlog"])){
            //Conectamos a la bas de datos------------------------------------
            include("conexion.php");
            //creamos la consulta---------------------------------------------
            $uss=$_POST["userlog"];
            $pass=$_POST["passwordlog"];
            $consulta=mysql_query("SELECT count(*)
                                   FROM usuario
                                   WHERE nombre_usuario='user'
                                          
                                   ");//and contrasenia=$uss
                                   //echo $consulta[0];
                                   echo $uss;//."\n".'".$_POST["passwordlog"]."';
                                   echo $pass;
                                   echo $consulta;
            //verificamos si existe el usuario en la base de datos--------------
            if($consulta>0){ 
                session_start();
                $_SESSION['usuario']=$_POST["userlog"];
                ?>
                <script type="text/javascript">
                     window.location="menuUsuario.php";
                </script>
                <?php
           }else{
                echo "<center><p>Datos de acceso Incorrectos</p></center>";
           }
    }else 'No ha ingresado los datos';
    //encriptar contrasena para proteger los datos
    /*function($valor){
        $encriptado=md5($valor);
        return $encriptado;
    }*/
    //cerramos la conexion######################################################
    // mysql_close($conexion);  
?>