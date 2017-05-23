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
    

    <li class="dropdown" id="menu">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white"> MENÚ OPCIONES  <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu"  style="background-color: #0B0B61">
          <li><a href="consulta.php"  style="color:white">Consultas de Productos</a></li>
          <li><a href="registrarClienteNuevoForm.php" style="color:white">Registrar cliente nuevo</a></li>
          <li><a href="ConsultaClientes.php" style="color:white">Consulta de clientes</a></li>
        </ul>
      </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="iniciarSesion.php"><span class="glyphicon glyphicon-log-in" style="color:white"></span> AREA EMPLEADOS</a></li>

      </ul>
    </div>
  </div>
</nav> 


    <body>
            <section >
                <div class="col-sm-1">
                </div>
                <div class="col-sm-10 text-left">
                <h3>Consulta de Producto por Id</h3><br>
                <table>
                        <?php         
                            $num = $_POST['idProducto'];                   
                            include ("conectar.php");
                             $query = "select * from $tabla_2 where IdProducto=$num";
                                    echo "<div class='container'>";
                                    echo "<table class='table table-hover'>";
                                    echo "<thead>";
                                    echo "<tr>";
                                    echo "<th>Id de Producto</th>";
                                    echo "<th>Producto</th>";
                                    echo "<th>Descripción</th>";
                                    echo "<th>Medida</th>";
                                    echo "<th>Presentación</th>";
                                    echo "<th>Precio</th>";
                                    echo "<th>Almacén</th>";
                                    echo "<th>Cantidad</th>";
                                    echo "</tr>";
                                    echo "</thead>";
                            if ($result = mysqli_query($conexion_db,$query)) {
                                $result->data_seek(0);
                                while ($registro = $result->fetch_assoc()) {
                                   echo "<tr>
                                            <td>".$registro['IdProducto']."</td>
                                            <td>".$registro['Producto']."</td>
                                            <td>".$registro['Descripcion']."</td>
                                            <td>".$registro['Medida']."</td>
                                            <td>".$registro['Presentacion']."</td>
                                            <td>".$registro['Precio']."</td>
                                            <td>".$registro['Almacen']."</td>
                                            <td>".$registro['Cantidad']."</td>
                                            </tr>";
                                }
                            }
                            include("desconectar.php");
                        ?>
                </table>
                </div>
            <div class="col-sm-1">
                  </div>
            </section>
    </body>











<br><br><br><br><br><br><br><br><br><br>
<footer class="container-fluid text-center">
  <p>AGRARIAN S.A. DE C.V. Todos los derechos reservados | Desarrollo e imágenes por Códice Maya</p>
</footer> 
    <!-- jQuery (necesario para plugins de Bootstrap que usan JavaScript) -->
    <script src="jquery-3.1.1.js"></script>
    <!-- Incluye todos los plugins -->
    <script src="js/bootstrap.min.js"></script>   
</body>
</html>




