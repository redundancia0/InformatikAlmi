<?php
    include_once 'bbdd.php'; // Incluir el archivo que contiene la conexión a la base de datos

    // Procesar el término de búsqueda
    $term = $_POST['term']; // Obtener el término de búsqueda desde el formulario

    // Ejecutar la consulta SQL
    $resultados = busqueda($term); // Función definida en bbdd.php que realiza la búsqueda
    // var_dump($resultados);
    // Mostrar los resultados
    foreach ($resultados as $articulo) {
        echo $articulo['nombre'] . "<br>";
    }
?>
