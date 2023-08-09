<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Publicaiones</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/publicaciones.css">
</head>
<body>
    <header>
        <br>
        <nav>
            <div id="title_header" class="container-fluid">
                <span class="navbar-brand mb-0 h1"> <h2>Publicaciones</h2> </span>
            </div>
        </nav>
        <br>
    </header>
    <br>

    <div id="contenedor">
        <?php

        include "../sql/conexion.php";

        $sql = "SELECT * FROM publicacion ORDER BY fecha DESC";
        $resultado = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $titulo = $fila['titulo'];
                $contenido = $fila['contenido'];
                $fecha = $fila['fecha'];
                $imagen = $fila['rutaImagen'];
               
                echo "<div id='contenedor'>
                        <h2>$titulo</h2>
                        <p>$contenido</p> 
                        <img src='$imagen' width='300'><br>
                        <p>$fecha</p>
                        <hr>
                      </div> ";
            }
        } else {
            echo "No hay publicaciones.";
        }

        ?>  
    </div>
    
</body>
</html>

