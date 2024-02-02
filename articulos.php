<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/comun.css">
    <title>InformatikAlmi</title>
</head>
<body>
    <header>
        <img src="img/almingo_logo.png" alt="logo">
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="articulos.php">Articulos</a></li>
            <li><a href="insertarArticulos.html">Subir Articulos</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="registro.html">Registro</a></li>
        </ul>
    </header>
    <article>
    <?php
    include_once 'bbdd.php';
    if(isset($_GET['idArticulo'])) {
    $idArticulo = $_GET['idArticulo'];

    // $articulo = get_articulos_id($idArticulo);
        echo '<article>';
        echo '<section>';
        echo '<h1>' . $articulo['titulo'] . '</h1>';
        echo '<br>';
        echo '<img src="' . $articulo['imagen'] . '" alt="fotoArticulo"><br>';
        echo '<p>' . $articulo['texto'] . '</p>';
        echo '</section>';
        echo '</article>';
    }
?>
    </article>
    <footer>
        <a href="https://www.instagram.com/"><img src="img/insta.png" alt="fotoInsta"></a>
        <a href="https://twitter.com/"><img src="img/x.png" alt="fotoTwitter"></a>
        <a href="https://www.youtube.com/"><img src="img/yt.png" alt="fotoYoutube"></a>
    </footer>
</body>
</html>