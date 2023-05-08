<!--DARLE SEGURIDAD A LA PAGINA-->
<?php

//va craer una sesion es la funcion que inicia o crea una secion , cuando la secion no se ah creado entonces la crea, pero si la secion ya esta creada inicia la secion en ese archivo.
//ESTO LE DA MAYOR SEGURIDAD A LAS APLICACIONES YA QUE SI PONES ALGUN DATO, CIERRAS EL NAVEGADOR Y VUELVES A ABRIR LA PAGINA SE RESTABLEZCAN O SE REINICIEN Y NO HAYA DATOS.
session_start();
//isset verificar si una variable existe
//signo de admiracion para negacion
if (!isset($_SESSION['cod_usuario'])) header("location: ../login/login.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/peliculas.css">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
   <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <a style="color: #D50C0C;"><i class="fa-solid fa-user"></i> <?php echo $_SESSION['nombres']?></a>
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
            <div class="col-lg-12 d-flex">
            <?php

            // Obtener de base datos las peliculas
            require_once("conexion.php");




            $sql = "SELECT * FROM pelicula WHERE activo = 1";
            $resultado = $cnx->query($sql);
            $reg = $resultado->fetchObject();

            // Valida si hay registros en la base de datos
            if(!$reg): ?>
            <strong class="title_catalogo">No se enceontraron resultados</strong>
            <?php
            else:

            //var_dump($reg);exit;
/*
            $data['cod_usuario']=$reg->cod_usuario;
            $data['nombres']=$reg->nombres;
            $data['apellidos']=$reg->apellidos;
            $data['dni']=$reg->dni;
            $data['telefono']=$reg->telefono;
            $data['direccion']=$reg->direccion;
            $data['passwor_cliente']=$reg->passwor_cliente;
            //FORMATO JEYSON: MANDA LOS DATOS DE TODAS LAS COLUMNAS DE LA BB
            echo json_encode($data);*/


            ?>


                <!--PELICULA1-->
                <div class="card" style="width: 18rem;">
                  <img src="img/<?php echo $reg->imagen; ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $reg->nombre_pelicula; ?></h5>
                    <p class="card-text"></p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $reg->categoria; ?></li>
                    <li class="list-group-item"><?php echo $reg->tiempo; ?></li>
                    <li class="list-group-item"><?php echo $reg->calificacion; ?></li>
                  </ul>
                  <div class="card-body">
                    <a href="back/venta.php" class="card-lin btn btn-danger"><i class="fa-solid fa-cart-shopping"></i> Comprar</a>
                    <a href="detalles/pelicula1.php?peliculaId=<?php echo $reg->id_pelicula; ?>" class="card-link btn btn-primary"><i class="fa-solid fa-plus"></i> Ver detalles</a>
                  </div>
                </div>
                 <!--PELICULA2-->
                <div class="card" style="width: 18rem;">
                  <img src="img/peli2.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">JURASSIC WORLD: DOMINIO</h5>
                    <p class="card-text"></p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">AVENTURA</li>
                    <li class="list-group-item">2hrs 26min</li>
                    <li class="list-group-item">TE +7</li>
                  </ul>
                  <div class="card-body">
                    <a href="#" class="card-lin btn btn-danger"><i class="fa-solid fa-cart-shopping"></i> Comprar</a>
                    <a href="detalles/pelicula2.php" class="card-link btn btn-primary"><i class="fa-solid fa-plus"></i> Ver detalles</a>
                  </div>
                </div>
                 <!--PELICULA3-->
                <div class="card" style="width: 18rem;">
                  <img src="img/peli3.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">LIGHTYEAR</h5>
                    <p class="card-text"></p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">ANIMACIÓN</li>
                    <li class="list-group-item">1hrs 45min</li>
                    <li class="list-group-item">TE +7</li>
                  </ul>
                  <div class="card-body">
                    <a href="#" class="card-lin btn btn-danger"><i class="fa-solid fa-cart-shopping"></i> Comprar</a>
                    <a href="detalles/pelicula3.php" class="card-link btn btn-primary"><i class="fa-solid fa-plus"></i> Ver detalles</a>
                  </div>
                </div>

                <?php endif; ?>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex">
                <!--PELICULA4-->
                <div class="card" style="width: 18rem;">
                  <img src="img/peli4.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">MINIONS NACE UN VILLANO</h5>
                    <p class="card-text"></p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">ANIMACIÓN</li>
                    <li class="list-group-item">1hrs 28min</li>
                    <li class="list-group-item">TE</li>
                  </ul>
                  <div class="card-body">
                    <a href="#" class="card-lin btn btn-danger"><i class="fa-solid fa-cart-shopping"></i> Comprar</a>
                    <a href="detalles/pelicula4.php" class="card-link btn btn-primary"><i class="fa-solid fa-plus"></i> Ver detalles</a>
                  </div>
                </div>
                 <!--PELICULA5-->
                <div class="card" style="width: 18rem;">
                  <img src="img/peli5.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">TODO EN TODAS PARTES AL MISMO TIEMPO</h5>
                    <p class="card-text"></p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">ACCIÓN</li>
                    <li class="list-group-item">2hrs 20min</li>
                    <li class="list-group-item">+14</li>
                  </ul>
                  <div class="card-body">
                    <a href="#" class="card-lin btn btn-danger"><i class="fa-solid fa-cart-shopping"></i> Comprar</a>
                    <a href="detalles/pelicula5.php" class="card-link btn btn-primary"><i class="fa-solid fa-plus"></i> Ver detalles</a>
                  </div>
                </div>
                 <!--PELICULA6-->
                <div class="card" style="width: 18rem;">
                  <img src="img/peli6.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">TOP GUN: MAVERICK</h5>
                    <p class="card-text"></p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">ACCIÓN</li>
                    <li class="list-group-item">2hrs 17min</li>
                    <li class="list-group-item">TE +7</li>
                  </ul>
                  <div class="card-body">
                    <a href="#" class="card-lin btn btn-danger"><i class="fa-solid fa-cart-shopping"></i> Comprar</a>
                    <a href="detalles/pelicula6.php" class="card-link btn btn-primary"><i class="fa-solid fa-plus"></i> Ver detalles</a>
                  </div>
                </div>
          </div>
        </div>
        <h1 class="text-center title_catalogo">Pr&oacute;ximos Estrenos</h1>
        <div class="row justify-content-center">
          <div class="col-lg-12 d-flex">
                <!--PELICULA7-->
                <div class="card" style="width: 18rem;">
                  <img src="img/peli7.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">ELVIS</h5> 
                    <p class="card-text">Estreno: 14 Julio 2022</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">DRAMA</li>
                    <li class="list-group-item">2hrs 39min</li>
                    <li class="list-group-item">TE</li>
                  </ul>
                  <div class="card-body boton_estrenos">
   
                    <a href="detalles/pelicula7.php" class="card-link btn btn-primary "><i class="fa-solid fa-plus"></i> Ver detalles</a>
                  </div>
                </div>
                 <!--PELICULA8-->
                <div class="card" style="width: 18rem;">
                  <img src="img/peli8.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">EL TELEFONO NEGRO</h5>
                    <p class="card-text">Estreno: 21 Julio 2022</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">TERROR</li>
                    <li class="list-group-item">2hrs 0min</li>
                    <li class="list-group-item">+14</li>
                  </ul>
                  <div class="card-body boton_estrenos">
  
                    <a href="detalles/pelicula8.php" class="card-link btn btn-primary"><i class="fa-solid fa-plus"></i> Ver detalles</a>
                  </div>
                </div>
                 <!--PELICULA9-->
                <div class="card" style="width: 18rem;">
                  <img src="img/peli9.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">BUENA SUERTE LEO GRANDE</h5>
                    <p class="card-text">Estreno: 28 Julio 2022</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">COMEDIA</li>
                    <li class="list-group-item">1hrs 37min</li>
                    <li class="list-group-item">TBC</li>
                  </ul>
                  <div class="card-body boton_estrenos">
    
                    <a href="detalles/pelicula9.php" class="card-link btn btn-primary "><i class="fa-solid fa-plus"></i> Ver detalles</a>
                  </div>
                </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex">
                <!--PELICULA10-->
                <div class="card" style="width: 18rem;">
                  <img src="img/peli10.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">DC LIGA DE SUPERMASCOTAS</h5>
                    <p class="card-text">Estreno: 28 Julio 2022</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">ANIMACIÓN</li>
                    <li class="list-group-item">1h 45min</li>
                    <li class="list-group-item">TE</li>
                  </ul>
                  <div class="card-body boton_estrenos">
            
                    <a href="detalles/pelicula10.php" class="card-link btn btn-primary "><i class="fa-solid fa-plus"></i> Ver detalles</a>
                  </div>
                </div>
                 <!--PELICULA11-->
                <div class="card" style="width: 18rem;">
                  <img src="img/peli11.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">TREN BALA</h5>
                    <p class="card-text">04 Agosto 2022</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">ACCIÓN</li>
                    <li class="list-group-item">2h</li>
                    <li class="list-group-item">+14</li>
                  </ul>
                  <div class="card-body boton_estrenos">
                
                    <a href="detalles/pelicula11.php" class="card-link btn btn-primary "><i class="fa-solid fa-plus"></i> Ver detalles</a>
                  </div>
                </div>
                 <!--PELICULA12-->
                <div class="card" style="width: 18rem;">
                  <img src="img/peli12.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">BESTIA</h5>
                    <p class="card-text">Estreno: 11 Agosto 2022</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">ACCIÓN</li>
                    <li class="list-group-item">2h</li>
                    <li class="list-group-item">TBC</li>
                  </ul>
                  <div class="card-body boton_estrenos">
                   
                    <a href="detalles/pelicula12.php" class="card-link btn btn-primary "><i class="fa-solid fa-plus"></i> Ver detalles</a>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer text-center">
        <small>&copy; 2022 <b>Javier Paredes Velasquez</b> - Todos los derechos Reservados.</small>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/34cd624114.js" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>