<?php

include_once "../config/DB.php";
include_once "../controllers/usuarioController.php";

$controller = new usuarioController();
$idUsuario = $_GET['id'];
$usuario = $controller->getUsuario($idUsuario);


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title> Ejemplo Prueba  | Usuario </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Bobra Software">

  <!-- Base Css Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   
  <!-- Base JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

</head>

<body class="fixed-left">

  <div id="wrapper">

    <!-- Start right content -->
    <div class="content-page">
      <!-- ============================================================== -->
      <!-- Start Content here -->
      <!-- ============================================================== -->
      <div class="content">


        <div class="row">
          <div class="col-md-12 portlets">
            <div class="widget">

              <!-- Detalle de usuario -->
              <div class="row">
                <div class="col-md-12 portlets">
                  <div class="widget">
                    <div class="widget-header ">
                    <h2>Usuario Ingresado <b><?php echo $idUsuario; ?></b></h2>
                    </div>
                    <div class="widget-content padding">
                      <form id="UsuarioForm" method="post">
                        
                      <div class="container">
                        <!-- Nombre -->
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="inputNombre" class="col-form-label">ID</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" name="inputNombre" class="form-control" value="<?php echo $usuario['nombre'];?>">
                            </div>
                        </div>

                        <!-- Apellido -->
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="inputApellido" class="col-form-label">Apellido</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" name="inputApellido" class="form-control" value="<?php echo $usuario['apellido'];?>">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="inputEmail" class="col-form-label">Email</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" name="inputEmail" class="form-control" value="<?php echo $usuario['email'];?>">
                            </div>
                        </div>
                     </div>

                      </form>
                    </div>
                  
                    <div class="col-md-4 col-md-offset-4">
                      <a href="home.php" class="btn btn-success">Volver</a>
                    </div>
                  
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- ============================================================== -->
      <!-- End content here -->
      <!-- ============================================================== -->

    </div>
    <!-- End right content -->

  </div>

</body>

</html>