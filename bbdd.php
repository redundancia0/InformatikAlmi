<?php
    function connect_database()
    {
        $mysqli = new mysqli("127.0.0.1", "root", "", "informatikAlmi");
        if($mysqli -> connect_errno)
        {
            echo "Fallo en la conexión: ".$mysqli->connect_errno;
        }
        return $mysqli;
    }
    function get_articulos()
    {
        $mysqli = connect_database();
        
        $sql = "SELECT * FROM articulos";
        $sentencia = $mysqli->prepare($sql);
        if(!$sentencia)
        {
            echo "Fallo en la preparación de la sentencia: ".$mysqli->errno;
        }
        
        $ejecucion = $sentencia->execute();
        if(!$ejecucion)
        {
            echo "Fallo en la ejecucion: ".$mysqli->errno;
        }
        
        $articulos = array();

        $id_articulos = -1;
        $nombre = "";
        $imagen = "";
        $descripcion = "";
        $precio = -1;
        $id_usuario = -1;
        $vincular = $sentencia->bind_result($id_articulos, $nombre, $imagen, $descripcion, $precio, $id_usuario);
        
        if(!$vincular)
        {
            echo "Fallo al vincular la sentencia: ".$mysqli->errno;
        }
        while($sentencia->fetch())
        {
            $noticia = array('id_articulos' => $id_articulos, 'nombre' => $nombre, 'imagen' => $imagen,
                            'descripcion' => $descripcion, 'precio' => $precio);
            $articulos[] = $noticia;
        }
        $mysqli->close();
        return $articulos;
    }
    

    function get_articulos_id($id_articulos)
    {
        
        $mysqli = connect_database();
        
        $sql = "SELECT * FROM articulos WHERE id_articulos = ?";
        $sentencia = $mysqli->prepare($sql);
        if(!$sentencia)
        {
            echo "Fallo en la preparación de la sentencia: ".$mysqli->errno;
        }

        $asignar = $sentencia->bind_param("i",$id_articulos);
        if(!$asignar)
        {
            echo "Fallo en la asignacion de parametros ".$mysqli->errno;
        }
        
        $ejecucion = $sentencia->execute();
        if(!$ejecucion)
        {
            echo "Fallo en la ejecucion: ".$mysqli->errno;
        }
        
        $articulo = array();

        $id_articulos = -1;
        $nombre = "";
        $imagen = "";
        $descripcion = "";
        $precio = -1;
        $id_usuario = -1;
        $vincular = $sentencia->bind_result($id_articulos, $nombre, $imagen, $descripcion, $precio, $id_usuario);
        
        if(!$vincular)
        {
            echo "Fallo al vincular la sentencia: ".$mysqli->errno;
        }
        if($sentencia->fetch())
        {
            $articulo = array('id_articulos' => $id_articulos, 'nombre' => $nombre, 'imagen' => $imagen,
                            'descripcion' => $descripcion, 'precio' => $precio);
        }
        $mysqli->close();
        return $articulo;
    }
    
    function login($user, $password)
    {
        $mysqli = connect_database();

        $sql = "SELECT id_usuario FROM usuario WHERE user = ? 
            AND password = ?";
            
        $sentencia = $mysqli->prepare($sql);
        if(!$sentencia)
        {
            echo "Fallo en la preparación de la sentencia".$mysqli->errno;
        }

        $asignar = $sentencia->bind_param("ss", $user, $password);
        if(!$asignar)
        {
            echo "Fallo en la asignación ".$mysqli->errno;
        }

        $ejecucion = $sentencia->execute();
        if(!$ejecucion)
        {
            echo "Fallo en la ejecución ".$mysqli->errno;
        }

        $usuario = -1;
        $vincular = $sentencia->bind_result($usuario);
        if(!$vincular)
        {
            echo "Fallo al asociar parámetros ".$mysqli->errno;
        }

        $result = false;
        if($sentencia->fetch())
        {
            $result = $usuario;
        }

        $mysqli->close();
        return $result;
    }

    function insert_articulos($nombre, $imagen, $descripcion, $precio, $id_usuario)
    {
        
        $mysqli = connect_database();
        
        $sql = "INSERT INTO articulos(nombre, imagen, descripcion, precio, id_usuario) 
                        VALUES (?, ?, ?, ?, ?)";
        $sentencia = $mysqli->prepare($sql);
        if(!$sentencia)
        {
            echo "Fallo en la preparación de la sentencia: ".$mysqli->errno;
        }

        $asignar = $sentencia->bind_param("sssii", $nombre, $imagen, $descripcion, $precio, $id_usuario);
        if(!$asignar)
        {
            echo "Fallo en la asignacion de parametros ".$mysqli->errno;
        }
        
        $ejecucion = $sentencia->execute();
        if(!$ejecucion)
        {
            echo "Fallo en la ejecucion: ".$mysqli->errno;
        }
        
        $mysqli->close();
        return true;
    }
    
?>