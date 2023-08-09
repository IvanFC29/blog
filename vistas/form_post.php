<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nueva publicación</title>
    <link rel="stylesheet" type="text/css" href="../styles/form_post.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <br>
        <nav>
            <div id="title_header" class="container-fluid">
                <span class="navbar-brand mb-0 h1"> <h2> Escribe tu publicación </h2> </span>
            </div>
        </nav>
        <br>
    </header>

    <center>
        <form id="formulario" class="form-control" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="titulo" class="col-sm-3 col-form-label"> <h5>Título:</h5> </label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" name="titulo" id="titulo">   
                </div>
            </div>
            
            <div class="row mb-3">
                <label for="contenido" class="col-sm-3 col-form-label"> <h5>Contenido:</h5> </label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="contenido" id="contenido" rows="4" cols="50"></textarea>
                </div>
            </div>
            
            <div class="row mb-3">
                <label for="imagen" class="col-sm-3 col-form-label"> <h5>Imagen:</h5> </label>
                <div class="col-sm-8">
                    <input class="form-control" type="file" name="imagen" id="imagen" accept="image/*" >
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button id="btn_guardar" class="form-control"> <b>Publicar</b> </button>    
                </div>
                <div class="col-sm-3 d-grid">
                    <a id="btn_cancelar" class="btn btn-danger" href="../index.php" role="button"> <b>Cancelar</b></a>
                </div>
            </div>
        </form>

        <div class="container my-5">
            <?php

            include "../sql/conexion.php";
            $mensaje = "";

            do{
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $titulo = $_POST['titulo'];
                $contenido = $_POST['contenido'];
                // Obtener la fecha actual
                $fecha = date('Y-m-d H:i');

                if (empty($titulo) or empty($contenido)) {
                    $mensaje = "Campos vacios, el campo imagen es el unico que puede ser opcional.";
                    echo "
                        <div id='mensaje' class='row mb-2'>
                            <div class'offset-sm-2 col-sm-2'>
                                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                    <strong> $mensaje</strong>
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button>
                                </div>
                            </div>
                        </div>";
                    break;
                }
                // Guardar la imagen en el servidor
                $nombreImagen = $_FILES['imagen']['name'];
                $rutaImagen = "../uploads/" . $nombreImagen;
                move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaImagen);

                // Insertar los datos en la base de datos
                $sql = "INSERT INTO publicacion (titulo, contenido, fecha, rutaImagen)
                        VALUES ('$titulo', '$contenido', '$fecha', '$rutaImagen')";

                $mensaje = "Publicación guardada correctamente.";

                if (!mysqli_query($conexion, $sql)) {
                    $mensaje = "Error al guardar la publicación: " . mysqli_error($conexion);
                }
                echo "
                    <div id='mensaje' class='row mb-2'>
                        <div class'offset-sm-2 col-sm-2'>
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <strong> $mensaje</strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button>
                            </div>
                        </div>
                    </div>";
                //header('location: ../index.php');
                }
            }while (false);

            ?>
        </div>
    </center>

</body>
</html>
