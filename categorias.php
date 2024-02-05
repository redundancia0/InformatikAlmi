<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/articulos.css">
    <link rel="stylesheet" href="css/comun.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Articulos</title>
</head>
<body>
    <header>
    <?php
        include_once 'menu.php';
    ?>
    </header>
    <article>
    <?php
    include_once 'bbdd.php';
    $articulos = get_articulos();
    echo '<br>';
    echo '<h1 class="titulo">Articulos Iniciales</h1>';
    echo '<div class="container">';
    foreach ($articulos as $articulo) {
        echo '<article>';
        echo '<section>';
        echo '<a href="id_articulos.php?id_articulos='.$articulo["id_articulos"].'"><h2>' . $articulo['nombre'] . '</h2></a>';
        echo '<br>';
        echo '<img src="' . $articulo['imagen'] . '" alt="fotoNoticia"><br>';
        echo '<span>'.$articulo['precio'].'€</span>';
        echo '</section>';
        echo '</article>';
    }
    echo "</div>";
?>
    </article>
    <footer>
        <a href="https://www.instagram.com/"><img src="img/insta.png" alt="fotoInsta"></a>
        <a href="https://twitter.com/"><img src="img/x.png" alt="fotoTwitter"></a>
        <a href="https://www.youtube.com/"><img src="img/yt.png" alt="fotoYoutube"></a>
    </footer>
</body>
</html>