<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once('servidor.php') 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de registro</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="header">
            <h2>Acceder</h2>
        </div>

        <form method="POST" action="login.php">
            <?php include('errores.php'); ?>
            <div class="input-group">
                <label>Usuario</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label>Contraseña</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
            </div>
            <p>
                ¿No eres miembro? <a href="registro.php">Regístrate</a>
            </p>
        </form>
    </body>
</html>