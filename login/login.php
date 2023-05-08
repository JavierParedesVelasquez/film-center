<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
    <!--Fuente-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <!--icono titulo-->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/icon-title.svg">
    <title>Login</title>
  </head>
  <body>
    

<section class="ftco-section">  
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
          <div class="login-wrap p-4 p-md-5">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="fa fa-user-o"></span>
            </div>
            <h3 class="text-center mb-4 title_login">Ingreso a la P&aacute;gina <br> FILM CENTER</h3>
                <form action="acceso.php" method="post" class="login-form">
                  <div class="form-group">
                      Ingrese su DNI:<input type="text" id="txtdni" name="txtdni" class="form-control " placeholder="DNI" required>
                  </div>

                    <div class="form-group ">
                      Ingrese su Clave:<input type="password" id="txtclave" name="txtclave" class="form-control rounded-left" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group ">
                     <button type="submit" class="btn btn-primary ms-4">Ingresar</button>
                       <a href="registrarse.php">
                          <button type="button" class="btn btn-info ">Registrarse</button>
                       </a>
                    </div>
                </form>
          </div>
        </div>
      </div>
      <div class="logo">
            <img src="../assets/img/logo.png" class="div_logo">
          </div>
    </div>
  </section>



















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