<?php

/**
 * @author ruben
 * @copyright 2014
 * SIS_II
 */

    //Conectamos a la Base de Datos#####################################################
    include("conexion.php");
   //Decalrar REglas ---------------------------------------
    
    //ver vitas de la DB
    $peticionLibro= "   SELECT isbn
                        FROM libro 
                        ORDER BY isbn
                          ";
    //mysql_query($peticionLibro,$conexion);
    //nombre mayor a 3 letras
    function validar($peticionLibro){
       return $peticionLibro;
    };
    //isbn no nulo 
    
    //autor no nulo
    
    
    
    //Comprobar Reglas---------------------------------------
    
    //Validamos Libro----------------------------------------
    
    //cerramos Conexion#################################################################
    
    

?>