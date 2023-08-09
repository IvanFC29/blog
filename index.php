<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Relatos del bosque</title>
	<link rel="stylesheet" type="text/css" href="styles/indexBlog.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<br>
		<nav>
  			<div id="title" class="container-fluid">
    			<span class="navbar-brand mb-0 h1"> <h2> Relatos del bosque </h2> </span>
  			</div>
  			<div id="botones_header" class="container-fluid">
  				<span> 
  					<a id="btn_publicar" class="btn btn-primary" href="vistas/form_post.php"> Publicar</a>
  					<a id="btn_ver_posts" class="btn btn-primary" href="vistas/publicaciones.php"> Ver Publicaciones</a>
  				</span>
  			</div>
		</nav>
		<br>
	</header>

	<!-- Aquí irá el carrusel -->
    <div class="container mt-4" data-bs-ride="carousel">
        <div id="carrusel" class="carousel slide" data-bs-ride="carousel">
            <!-- Agrega las flechas de navegación -->
            <a class="carousel-control-prev" href="#carrusel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carrusel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </a>
            <!-- Agrega los slides del carrusel -->
            <div class="carousel-inner">
            	<!-- slide 1 -->
                <div class="carousel-item active">
                	<div id="imagen">
                		<center><img src="images/slide1.png" class="d-block w-100" alt="" style="max-width: 20%;"> </center>
                	</div>
                	<br>
                    <div id="parrafo">
                    	<p>Relatos del bosque es un sitio dedicado a compartir la importancia de los bosques de nuestro planeta</p>
                    </div>
                </div>
                <!-- slide 2 -->
                <div class="carousel-item">
                	<div id="imagen">
                		<center><img src="images/slide2.png" class="d-block w-100" alt="" style="max-width: 20%;"> </center>
                	</div>
                	<br>
                    <div id="parrafo">
                    	<p>Artículos que tratan acerca de la fauna y flora que habitan en los pulmones verdes de la Tierra</p>
                    </div>
                </div>
                <!-- slide 3 -->
                <div class="carousel-item">
                	<div id="imagen">
                		<center><img src="images/slide3.png" class="d-block w-100" alt="" style="max-width: 20%;"></center>
                	</div>   
                	<br>    
                    <div id="parrafo">
                    	<p>Algunos de los contenidos publicados en este blog estan relatados en tercera persona para tender al lector a ponerse en la situación que viven los bosques</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Inicializa el carrusel
            $('#carrusel').carousel();
        });
	</script>
</body>
</html>