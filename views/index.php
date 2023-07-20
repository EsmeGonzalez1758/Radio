<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./extensiones.php");?>
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <?php
        include("../config/conexion.php");
    ?>
    <?php
        include("../config/controlador.php");
    ?>
<div class="login">
        <h1 class="text-center">Login</h1>
        <form class="needs-validation" action="" method="post">
            <div class="form-group was-validated">
                <input class="form-control" type="text" name="user" placeholder="usuario">
            </div>
            
            <div class="form-group was-validated">
                <input class="form-control" type="password" name="pass" placeholder="contraseña">
            </div>

            <input class="btn btn-success w-100" type="submit" value="Entrar" name="btnIngresar">

        </form>

    </div>
    
    
</body>
</html>