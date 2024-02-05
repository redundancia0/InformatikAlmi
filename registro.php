<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/comun.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Registro</title>
</head>
<body>
    <header>
    <?php
        include_once 'menu.php';
    ?>
    </header>
    <h1>Registro</h1>
    <form method="post" action="registroVerificar.php">
        <img class="formLogo" src="img/logo.png">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required placeholder="Introduzca su nombre">
        <br>
        <label for="apellido1">Apellido1</label>
        <input type="text" id="apellido1" name="apellido1" required placeholder="Introduzca su apellido1">
        <br>
        <label for="apellido2">Apellido2</label>
        <input type="text" id="apellido2" name="apellido2" required placeholder="Introduzca su apellido2">
        <br>
        <label for="dni">DNI</label>
        <input type="text" id="dni" name="dni" required placeholder="Introduzca su DNI">
        <br>
        <label for="direccion">Direccion</label>
        <textarea name="direccion" id="direccion" cols="30" rows="10" placeholder="Introduzca su dirección"></textarea>
        <br>
        <label for="correo">Correo</label>
        <input type="email" name="correo" id="correo" requiered placeholder="Introduzca su correo">
        <br>
        <label for="telefono">Num. Telefono</label>
        <input type="text" name="telefono" id="telefono" requiered placeholder="Introduzca su numero telefonico">
        <br>
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" requiered placeholder="Introduzca su usuario">
        <br>
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required placeholder="Introduzca su contraseña">
        <br>
        <input type="submit" id="singup" value="Registrarse"></input>
    </form>
    <footer>
        <a href="https://www.instagram.com/"><img src="img/insta.png" alt="fotoInsta"></a>
        <a href="https://twitter.com/"><img src="img/x.png" alt="fotoTwitter"></a>
        <a href="https://www.youtube.com/"><img src="img/yt.png" alt="fotoYoutube"></a>
    </footer>
</body>
</html>