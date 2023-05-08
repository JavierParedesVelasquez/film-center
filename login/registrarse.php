<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!--Fuente-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
     <!--icono titulo-->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/icon-title.svg">
    <title>Registrate</title>
  </head>
  <body>  
    
  <div class="main">
    <div class="container ">
      <div class="row">
        <div class="col-lg-6">
          <div class="img_banner1">
            <img src="../assets/img/banner1.png" class="banner1 img-fluid">
          </div>
        </div>
        <div class="col-lg-6 div_cuadro">
          <div class="div_login login-wrap">
            <form action="insertar.php" method="post" class="login-form">
                  <p>!En FILMCENTER  encontraras ofertas con hasta un 90% de descuento! Suscribete ingresando tus datos aquí</p>
                 
                  <div class="form-group">
                      <input type="text" id="txtnombres" name="txtnombres" class="form-control rounded-left" placeholder="Ingrese su nombre">
                  </div>
                  <div class="form-group">
                      <input type="text" id="txtapellidos" name="txtapellidos" class="form-control rounded-left" placeholder="Ingrese su apellido">
                  </div>
                  <div class="form-group">
                      <input type="text" id="txtdni" name="txtdni" class="form-control rounded-left" placeholder="Ingrese su DNI">
                  </div>
                  <div class="form-group">
                      <input type="text" id="txttelefono" name="txttelefono" class="form-control rounded-left" placeholder="Ingrese su telefono">
                  </div>
                  <div class="form-group">
                      <input type="text" id="txtdireccion" name="txtdireccion" class="form-control rounded-left" placeholder="Ingrese su Dirección">
                  </div>
                   <div class="form-group">
                      <input type="text" id="txtpassword" name="txtpassword" class="form-control rounded-left" placeholder="Ingrese su Clave">
                  </div>
                    <div class="form-group text-center">
                      <button type="submit" class="btn btn-info ">Registrarse</button>
                        <a href="login.php">
                          <button type="button" class="btn btn-primary">Iniciar Sesion</button>
                        </a>
                    </div>
                </form>
          </div>
          
        </div>
        <div class="logo">
            <img src="../assets/img/logo.png" class="div_logo">
          </div>
      </div>
    </div>
  </div>






























    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>