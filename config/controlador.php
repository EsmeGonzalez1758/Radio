<?php
    if(!empty($_POST["btnIngresar"])){
        if(empty($_POST["user"]) and empty($_POST["pass"])){
            echo '<div class = "alert alert-danger"> LOS CAMPOS ESTAN VACIOS</div>';
        }else{
            $usuario=$_POST["user"];
            $clave=$_POST["pass"];
            $sql = $conexion->query(" select * from usuario where usuario = '$usuario' and clave = '$clave'");
            if($datos=$sql->fetch_object()){
                header("location:inicio.php");
            }else{
                echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
            }
        }

    }
?>