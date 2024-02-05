<?php
    session_start();
    include_once "bbdd.php";
    $sesionCorrecta = login($_POST["user"], $_POST["password"]);

    if($sesionCorrecta)
    {
        $_SESSION["user"] = $_POST["user"];
        $_SESSION["idUser"] = $sesionCorrecta;
        header("location: index.php");
    } else
    {
        header("location: index.php");
    }
?>
