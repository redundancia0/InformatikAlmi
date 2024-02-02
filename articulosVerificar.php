<?php
    session_start();
    $id_usuario = $_SESSION["idUser"];
    include_once('bbdd.php');
    $result = insert_articulos($_POST['nombre'], $_POST['imagen'], $_POST['descripcion'],
        $_POST['precio'], $id_usuario);
    header('location: index.php');
?>