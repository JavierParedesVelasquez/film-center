<!--DARLE SEGURIDAD A LA PAGINA-->
<?php

//va craer una sesion es la funcion que inicia o crea una secion , cuando la secion no se ah creado entonces la crea, pero si la secion ya esta creada inicia la secion en ese archivo.
//ESTO LE DA MAYOR SEGURIDAD A LAS APLICACIONES YA QUE SI PONES ALGUN DATO, CIERRAS EL NAVEGADOR Y VUELVES A ABRIR LA PAGINA SE RESTABLEZCAN O SE REINICIEN Y NO HAYA DATOS.
session_start();
//isset verificar si una variable existe
//signo de admiracion para negacion
if (!isset($_SESSION['cod_usuario'])) header("location: ../../login/login.php");

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../css/peliculas.css">
    <link rel="stylesheet" type="text/css" href="../css/detalles.css">
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
    <link rel="icon" type="text/css" href="../img/logo.png">
</head>
<body>
<header>
    <div class="contenedor">
        <h2 class="logotipo">FILM CENTER</h2>
        <nav>
            <a style="color: #D50C0C;"><i class="fa-solid fa-user"></i> <?php echo $_SESSION['nombres'] ?></a>
            <a href="../index.php">Inicio</a>
            <a href="../peliculas.php" class="activo">Películas</a>
            <a href="../ranking.php">Ranking</a>
            <a href="../../login/login.php"><i class="fa-solid fa-power-off"></i> Cerrar Sesi&oacute;n</a>
        </nav>
    </div>
</header>

<div class="container">
    <div class="row">

        <?php
        require_once("../conexion.php");
        // Obtener de base datos la pelicula por id
        $pelidulaId = (int)$_GET['peliculaId'];


        $sql = "SELECT * FROM pelicula WHERE id_pelicula = $pelidulaId";
        $resultado = $cnx->query($sql);
        $reg = $resultado->fetchObject();
        //validar si la pelicula existe
        if (!$reg):
            ?>

        <?php endif; ?>

        <h3 class="title_venta"><?php echo $reg->nombre_pelicula; ?></h3>
        <div class="col-lg-4">
            <img src="../img/<?php echo $reg->imagen; ?>" class="card-img-top">
            <br>
            <br>
            <h4 class="subtitulo2">Idioma</h4>
            <p><?php echo $reg->idioma; ?></p>
            <h4 class="subtitulo2">Disponible</h4>
            <p><?php echo $reg->disponible; ?></p>
            <h4 class="subtitulo2">Duracion</h4>
            <p><?php echo $reg->tiempo; ?></p>

            <h4 class="subtitulo2">Precio</h4>
            <strong>S/. <?php echo $reg->precio; ?></strong>


        </div>
        <div class="col-lg-8">
           <h3 class="text-center">Datos del cliente</h3>
            <div class="row text-center cuadro_venta">
                <table class="table">
                    <tr>
                        <td>
                            <strong>Nombre del cliente:</strong>
                        </td>
                        <td><?php echo $_SESSION["nombres"] . ' ' . $_SESSION['apellidos']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>DNI:</strong></td>
                        <td><?php echo $_SESSION["dni"]; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Telefono:</strong></td>
                        <td><?php echo $_SESSION["telefono"]; ?></td>
                    </tr>
                </table>
                <form action="procesar-venta.php" method="post">
                    <input type="hidden" name="pelicula_id" value="<?php echo $_GET['peliculaId']; ?>">
                    <input type="hidden" name="cliente_id" value="<?php echo $_SESSION['cod_usuario']; ?>">
                    <input type="hidden" name="precio" value="<?php echo $reg->precio; ?>">
                    <label for="">Cantidad de asientos:</label>
                    <input type="text" name="asientos" required="required">
                    <br><br>
                    <div class="col-lg-2 div_button text-center">
                        <button class="btn btn-danger bnt-lg btn-block" type="submit">Comprar</button>
                    </div>
                </form>
                
            </div>

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