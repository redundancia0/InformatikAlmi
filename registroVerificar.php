<?php
    include_once 'bbdd.php';

    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido1'];
    $dni = $_POST['dni'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

   

    if (registro($nombre, $apellido1, $apellido2, $dni, $direccion, $correo, $telefono, $usuario, $password)) {
        header("location: index.php");
    } else {
        header("location: registro.php");
    }
?>