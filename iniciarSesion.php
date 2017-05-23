<?php
    
    session_start();
    if (isset($_SESSION["usuario"])) {
        header("Location:logueado.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inicio</title>
            <!-- Las 3 meta siempre son primeras en el head; Cualquier otro contenido tiene que ir despues -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="test.js"></script>
    <script src="js/script.js"></script>
   
</head>

<body>

<header>
     <div class="image" class="col-md-4" align="center">
            <img style="margin: 15px" class="img-responsive" src="images/Agrarian.jpg">
    </div> 
</header>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li  style="background-color: #0B0B61"><a href="index.php" style="color:white">INICIO</a></li>
        <li><a href="nosotros.html" style="color:white">NOSOTROS</a></li>
        
        <li class="dropdown" id="menu"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white"> SOLUDRIP &reg; ESPECIALIDADES <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu"  style="background-color: #0B0B61">
                <li><a href="soludripChiles.html" style="color:white">Soludrip &reg; Chiles</a></li>
                <li><a href="soludripTomates.html"  style="color:white">Soludrip &reg; Tomates</a></li>
                <li><a href="soludripCebollas.html" style="color:white">Soludrip &reg; Cebollas</a></li>
                <li><a href="soludripSandias.html" style="color:white">Soludrip &reg; Sandías</a></li>
                <li><a href="soludripAlgodon.html" style="color:white">Soludrip &reg; Algodón</a></li>
                <li><a href="soludripCanas.html" style="color:white">Soludrip &reg; Caña</a></li>
                <li><a href="soludripCitricos.html" style="color:white">Soludrip &reg; Cítricos</a></li>
                <li><a href="soludripEsparragos.html" style="color:white">Soludrip &reg; Espárragos</a></li>
                <li><a href="soludripPapas.html" style="color:white">Soludrip &reg; Papa</a></li>
                <li><a href="soludripPapasInd.html" style="color:white">Soludrip &reg; Papa Industrial</a></li>
                <li><a href="soludripPapayas.html" style="color:white">Soludrip &reg; Papaya</a></li>
              </ul>
            </li>
        <li><a href="genericos.html" style="color:white">SOLUDRIP &reg; GENÉRICOS</a></li>
        <li class="dropdown" id="menu">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white"> JUST IN TIME <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu"  style="background-color: #0B0B61">
                <li><a href="concepto.html"  style="color:white">Concepto</a></li>
                <li><a href="http://www.dosificadorsoludrip.com/" style="color:white">Dosificador</a></li>
              </ul>
            </li>
        <li><a href="contacto.html" style="color:white">CONTACTO</a></li>
        <li><a href="enlaces.html" style="color:white">ENLACES</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="iniciarSesionCliente.php"><span class="glyphicon glyphicon-log-in" style="color:white"></span> ACCESO CLIENTES</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="iniciarSesion.php"><span class="glyphicon glyphicon-log-in" style="color:white"></span> ACCESO EMPLEADOS</a></li>

      </ul>
    </div>
  </div>
</nav> 

    
  <div class="container-fluid text-center">
  <div class="row content">
      <div class="col-sm-2 sidenav">

      </div>

    <div class="col-sm-8 text-left">
       <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Acceso Empleados</strong></h1>
                            <div class="description">
                              <p>
                                
                              </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                          <div class="form-top">
                            <div class="form-top-left">
                              <h3>Bienvenido !!</h3>
                                <p>Ingresa tu nombre de usuario y contraseña para acceder:</p>
                            </div>
                            <div class="form-top-right">
                              <i class="fa fa-lock"></i>
                            </div>
                            </div>

                      <div class="header-info">

                          <form method="POST" action="login.php" onsubmit="return validars()">
                            <div class="form-group">
                              <label><b>Usuario</b></label> 
                              <input class="form-control" type="text" placeholder="Ingresa tu Usuario" id="usuario" name="usuario" required>
                              
                            </div>
                            <div class="form-group">
                              <td><label>Contraseña:</label></td>
                              <input class="form-control" type="password" placeholder="Ingresa tu Password" id="password" name="password" required>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"> Recordarme</label>
                            </div>
                            <td></td>
                            <td><input type="reset" value="Limpiar" style="color:#000000"> <input type="submit" value="Iniciar Sesión" style="color:#000000"> </td>
                            <!--<button name="login" type="submit" value="login" class="btn btn-default">Ingresar</button>-->
                          </form>

                      </div>
                        </div>
                    </div>
          </div>
    <div class="col-sm-2 sidenav">
    </div>
  </div>
</div>




<footer class="container-fluid text-center">
  <p>AGRARIAN S.A. DE C.V. Todos los derechos reservados | Desarrollo e imágenes por Códice Maya</p>
</footer>
    <!-- jQuery (necesario para plugins de Bootstrap que usan JavaScript) -->
    <script src="jquery-3.1.1.js"></script>
    <!-- Incluye todos los plugins -->
    <script src="js/bootstrap.min.js"></script>   
</body>
</html>
