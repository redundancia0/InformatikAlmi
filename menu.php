<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/comun.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<header>
    <a href="index.php"><img src="img/logo.png" alt="logo"></a>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="categorias.php">Articulos</a></li>
            <li><a href="insertarArticulos.php">Subir Articulos</a></li>
        <?php
                session_start();
                if (isset($_SESSION["user"])) {
                    $user = $_SESSION["user"];
                    echo "<li><p>".$user."</p></li>";
                    echo "<li><a href='logout.php'>Salir</a></li>";
                } else {
                    echo "<li><a href='registro.php'>Registro</a></li>";
                    echo "<li><a href='login.php'>Login</a></li>";
                }
                ?>
             </ul>
</header>