<?php

    $host="localhost";
    $database="empresa_radio";
    $user="root";
    $pass="";

    $conexion = mysqli_connect($host,$user,$pass,$database);
    

    if(!$conexion){
        die("Conexion Fallida: ". mysqli_connect_error());
    }
?>