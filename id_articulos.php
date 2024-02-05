<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/id_articulos.css">
    <link rel="stylesheet" href="css/comun.css">
    <title>InformatikAlmi | Articulo</title>
</head>
<body>
    <header>
    <?php
        include_once 'menu.php';
    ?>
    </header>
    <?php
        include_once 'bbdd.php';
        if(isset($_GET['id_articulos'])) {
        $id_articulos = $_GET['id_articulos'];
    
        $articulos = get_articulos_id($id_articulos);
        
            echo '<article>';
            echo '<section>';
            echo '<h1>' . $articulos['nombre'] . '</h1>';
            echo '<br>';
            echo '<img src="' . $articulos['imagen'] . '" alt="fotoArticulo"><br>';
            echo '<p>' . $articulos['descripcion'] . '</p>';
            echo '<span>'. $articulos['precio'] . '€</span>';
            echo '</section>';
            echo '</article>';
        }
?>
    <footer>
        <a href="https://www.instagram.com/"><img src="img/insta.png" alt="fotoInsta"></a>
        <a href="https://twitter.com/"><img src="img/x.png" alt="fotoTwitter"></a>
        <a href="https://www.youtube.com/"><img src="img/yt.png" alt="fotoYoutube"></a>
    </footer>
</body>
</html>