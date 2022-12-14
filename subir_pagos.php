<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Verifiación de pago</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/all.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>



    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">VERIFICACIÓN DE UNIDADES</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesión</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
              <ul class="nav" id="main-menu">
                <li class="text-center user-image-back">
                    <img src="assets/img/find_user.png" style="display:inline-block !important;" class="img-responsive" />
                    <h4 style="color:white">Administración</h4>
                </li>


                  <li>
                      <a href="blank.html"><i class="fa fa-desktop "></i>Resúmen</a>
                  </li>
                  <li>
                      <a href="unidades.php"><i class="fa-solid fa-truck-pickup"></i>Unidades</a>
                  </li>
                  <li>
                      <a href="#"><i class="fa-solid fa-upload"></i> Subir documentos<span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level">
                          <li>
                              <a href="comprobante_pagos.php">Recibo de Pago</a>
                          </li>
                          <li>
                              <a href="#">Comprobante de verificación</a>
                          </li>
                      </ul>
                  </li>
              </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
              <div class="row">
                <h1 class="text-center">Subir recibo de pago</h1>
              </div>
              <div class="row formulario" style="margin-top:70px;">
                <form class="" action="index.html" method="post">
                  <div class="text-center">
                    <label for=""> <b> Núm. de activo:</b> 10000001364</label>
                    <label for=""> <b> Placas :</b> JV93395</label>
                    <input type="file" name="" value="">
                  </div>
                  <div class="text-center">
                    <button type="input" class="btn btn-success" name="button">Enviar recibo</button>
                  </div>
                </form>
              </div>

              </div>
             <!-- /. PAGE INNER  -->
          </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
