<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/subirArticulos.css">
    <link rel="stylesheet" href="css/comun.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Subir Articulos</title>
</head>
<body>
    <header>
     <?php
        include_once 'menu.php';
    ?>
    </header>
    <h1>Subir Articulos</h1>
    <form method="post" action="articulosVerificar.php" enctype="multipart/form-data">
        <img class="formLogo" src="img/logo.png">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required placeholder="Nombre del articulo">
        <br>
        <label for="imagen">Imagen</label>
        <input type="file" name="imagen" id="imagen" accept="image/*">
        <br>
        <label for="descripcion">Descripcion</label>
        <textarea id="descripcion" name="descripcion" rows="5" cols="50" maxlength="250"></textarea>
        <br>
        <label for="precio">Precio</label>
        <input type="text" name="precio" id="precio" required placeholder="Precio del articulo">
        <br>
        <input type="submit" id="singup"></input>
    </form>
    <footer>
        <a href="https://www.instagram.com/"><img src="img/insta.png" alt="fotoInsta"></a>
        <a href="https://twitter.com/"><img src="img/x.png" alt="fotoTwitter"></a>
        <a href="https://www.youtube.com/"><img src="img/yt.png" alt="fotoYoutube"></a>
    </footer>
</body>
</html>