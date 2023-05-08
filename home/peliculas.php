<!--DARLE SEGURIDAD A LA PAGINA-->
<?php
//va craer una sesion es la funcion que inicia o crea una secion , cuando la secion no se ah creado entonces la crea, pero si la secion ya esta creada inicia la secion en ese archivo.
//ESTO LE DA MAYOR SEGURIDAD A LAS APLICACIONES YA QUE SI PONES ALGUN DATO, CIERRAS EL NAVEGADOR Y VUELVES A ABRIR LA PAGINA SE RESTABLEZCAN O SE REINICIEN Y NO HAYA DATOS.
session_start();
//isset verificar si una variable existe
//signo de admiracion para negacion
if (!isset($_SESSION['cod_usuario'])) header("location: ../login/login.php");

    $conexion=mysqli_connect('localhost','root','','filmcenter');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/peliculas.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap"
          rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--FUENTE-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@900&display=swap" rel="stylesheet">
    <title>FILM CENTER</title>
    <!--logo-->
    <link rel="icon" type="text/css" href="img/logo.png">
</head>
<body>
<header>
    <div class="contenedor">
        <h2 class="logotipo">FILM CENTER</h2>
        <nav>
            <a style="color: #D50C0C;"><i class="fa-solid fa-user"></i> <?php echo $_SESSION['nombres'] ?></a>
            <a href="index.php">Inicio</a>
            <a href="peliculas.php" class="activo">Películas</a>
            <a href="ranking.php">Ranking</a>
            <a href="../login/login.php"><i class="fa-solid fa-power-off"></i> Cerrar Sesi&oacute;n</a>
        </nav>
    </div>
</header>
<div class="peliculas_catalogo">
    <div class="container">
        <h1 class="text-center title_catalogo">Pel&iacute;culas en cartelera</h1>
        <div class="row">
                <?php
                    //se agrega el archivo de conexion, se le pasa toda la cadena de conexion a la base de datos
                    $sql="SELECT * from pelicula";
                    $result1=mysqli_query($conexion,$sql);
                    while($mostrar1=mysqli_fetch_array($result1)){
                 ?>
                <div class="col-lg-4 d-flex">
                    <div class="card" style="width: 18rem;">
                        <img src="img/<?php echo $mostrar1['imagen'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $mostrar1['nombre_pelicula'] ?></h5>
                            <p class="card-text"></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo $mostrar1['categoria'] ?></li>
                            <li class="list-group-item"><?php echo $mostrar1['tiempo'] ?></li>
                            <li class="list-group-item"><?php echo $mostrar1['calificacion'] ?></li>
                        </ul>
                        <div class="card-body">
                            <a href="back/venta.php?peliculaId=<?php echo $mostrar1['id_pelicula'] ?>" class="card-lin btn btn-danger"><i
                                        class="fa-solid fa-cart-shopping"></i> Comprar</a>
                            <a href="detalles/pelicula.php?peliculaId=<?php echo $mostrar1['id_pelicula'] ?>"
                               class="card-link btn btn-primary"><i class="fa-solid fa-plus"></i> Ver detalles</a>
                        </div>
                    </div>
                </div>
                    <?php 
                        }
                     ?>     
            </div>
        </div>
        <div class="container">
        <h1 class="text-center title_catalogo">Pel&iacute;culas en Estreno</h1>
        <div class="row">
                <?php
                    $sql="SELECT * from estrenos";
                    $result2=mysqli_query($conexion,$sql);
                    while($mostrar2=mysqli_fetch_array($result2)){
                 ?>
                <div class="col-lg-4 d-flex">
                    <div class="card" style="width: 18rem;">
                        <img src="img/estrenos/<?php echo $mostrar2['imagen'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $mostrar2['nombre_pelicula'] ?></h5>
                            <p class="card-text"><?php echo $mostrar2['time_estreno'] ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo $mostrar2['categoria'] ?></li>
                            <li class="list-group-item"><?php echo $mostrar2['tiempo'] ?></li>
                            <li class="list-group-item"><?php echo $mostrar2['calificacion'] ?></li>
                        </ul>
                        <div class="card-body text-center">
                            <a href="detalles/pelicula2.php?peliculaId=<?php echo $mostrar2['id_pelicula'] ?>"
                               class="card-link btn btn-primary"><i class="fa-solid fa-plus"></i> Ver detalles</a>
                        </div>
                    </div>
                </div>
                    <?php 
            }
         ?>     
            </div>
        </div>
        
</div>
<footer class="footer text-center">
    <small>&copy; 2022 <b>Javier Paredes Velasquez</b> - Todos los derechos Reservados.</small>
</footer>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/34cd624114.js" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>