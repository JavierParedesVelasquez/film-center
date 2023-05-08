<!--DARLE SEGURIDAD A LA PAGINA-->
<?php
//va craer una sesion es la funcion que inicia o crea una secion , cuando la secion no se ah creado entonces la crea, pero si la secion ya esta creada inicia la secion en ese archivo.
//ESTO LE DA MAYOR SEGURIDAD A LAS APLICACIONES YA QUE SI PONES ALGUN DATO, CIERRAS EL NAVEGADOR Y VUELVES A ABRIR LA PAGINA SE RESTABLEZCAN O SE REINICIEN Y NO HAYA DATOS.
session_start();
//isset verificar si una variable existe
//signo de admiracion para negacion
if (!isset($_SESSION['cod_usuario'])) header("location: ../login/login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	 <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>FILM CENTER</title>
	<!--logo-->
	<link rel="icon" type="text/css" href="img/logo.png">
	<style type="text/css">
		.carousel-caption{
			    left: 5%;
		}
		.boton_home a{
			margin-left: -397px;
		}


	</style>
</head>
<body>
	<header>
		<div class="contenedor">
			<h2 class="logotipo">FILM CENTER</h2>
			<nav>
				<a style="color: #D50C0C;"><i class="fa-solid fa-user"></i> <?php echo $_SESSION['nombres']?></a>
				<a href="index.php" class="activo">Inicio</a>
				<a href="peliculas.php">Películas</a>
				<a href="ranking.php">Ranking</a>
				<a href="../login/login.php"><i class="fa-solid fa-power-off"></i> Cerrar Sesi&oacute;n</a>
			</nav>
		</div>
	</header>

	<main>
		 <div class="slider">
          <div class="container-fluid p-0">
            <div class="">
              <div class="">
                 <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
               <?php
                require_once("conexion.php");
                // Obtener de base datos las peliculas
                $sql = "SELECT * FROM home WHERE activo = 1";
                $resultado = $cnx->query($sql);
                $reg = $resultado->fetchObject();

                // Valida si hay registros en la base de datos
                if (!$reg): ?>
    			<?php else: ?>
                    <div class="carousel-item active div_home">
                      <img src="img/home/<?php echo $reg->imagen; ?>" class="banner_home " alt="...">
                      <div class="carousel-caption text-left">
                        <h3 class="titulo"><?php echo $reg->nombre_pelicula; ?></h3>
                        <p class="descripcion"><?php echo $reg->descripcion; ?></p>
                        <div class="boton_home">
                          <a href="back/venta2.php?peliculaId=<?php echo $reg->id_pelicula; ?>" class="card-lin btn btn-danger"><i
                                        class="fa-solid fa-cart-shopping"></i> Comprar</a>
                         <a href="detalles/pelicula3.php?peliculaId=<?php echo $reg->id_pelicula; ?>"
                               class="card-link btn btn-primary"><i class="fa-solid fa-plus"></i> Ver detalles</a>
                        </div>
                      </div>
                    </div>
                    	<?php endif; ?>
                  </div>
                  <!--
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
              -->
                </div>
              </div>
            </div>
          </div>
        </div>
       
		
 		
		<div class="peliculas-recomendadas contenedor pt-5">
			<div class="contenedor-titulo-controles">
				<h3>Películas Recomendadas</h3>
				<div class="indicadores"></div>
			</div>

			<div class="contenedor-principal">
				<button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

				<div class="contenedor-carousel">
					<div class="carousel">
						
						<div class="pelicula">
							<a href="#"><img src="img/11.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/12.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/13.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/14.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/15.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/16.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/17.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/18.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/21.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/1.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/3.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/4.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/5.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/6.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/7.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/8.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/9.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/10.png" alt=""></a>
						</div>
					</div>
				</div>

				<button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
			</div>
		</div>
		<footer class="footer text-center">
         	<small>&copy; 2022 <b>Javier Paredes Velasquez</b> - Todos los derechos Reservados.</small>
  	    </footer>
	</main>
	
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../dist/js/app-style-switcher.js"></script>


	<script src="https://kit.fontawesome.com/34cd624114.js" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
 	
</body>
</html>