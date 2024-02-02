<header>
        <img src="img/logo.png" alt="logo">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="articulos.php">Articulos</a></li>
            <li><a href="insertarArticulos.php">Subir Articulos</a></li>
        <?php
                session_start();
                if (isset($_SESSION["user"])) {
                    $user = $_SESSION["user"];
                    echo "<li><p>".$user."</p></li>";
                    echo "<li><a class='enlaceMenu' href='logout.php'>Salir</a></li>";
                } else {
                    echo "<li><a class='enlacemenu' href='registro.php'>Registro</a></li>";
                    echo "<li><a class='enlacemenu' href='login.php'>Login</a></li>";
                }
                ?>
             </ul>
</header>