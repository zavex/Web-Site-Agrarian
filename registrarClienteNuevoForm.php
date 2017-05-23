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


<script>
var nombreOk=false;
var rfcOk=false;
var emailOk=false;
var dirOk=false;
var munOk=false;
var passOk=false;
var pass2Ok=false;
var contactoOk=false;
var telOk=false;
var cpOk=false;
var estadoOk=false;
     
window.onload=function(){
    var everyInputs=document.getElementsByTagName('input');
    for (var i=0;i<(everyInputs.length);i++){
        everyInputs[i].addEventListener('focus',estilo);
        everyInputs[i].addEventListener('blur',estilo2);
        var nodoname=everyInputs[i].name;
       
        switch (nodoname){
                case "nombre":
                    everyInputs[i].addEventListener('blur',validarNombre);
                    break;
                case "correo":
                    everyInputs[i].addEventListener('blur',validarEmail);
                    break;
                case "password":
                    everyInputs[i].addEventListener('blur',passs);   
                    break;
                case "password2":
                    everyInputs[i].addEventListener('blur',passVal);   
                    break;
                case "telefono":
                    everyInputs[i].addEventListener('blur',validarTelefono);
                    break;
                case "direccion":
                    everyInputs[i].addEventListener('blur',validarDir);   
                    break;
                case "cp":
                    everyInputs[i].addEventListener('blur',validarCp);   
                    break;
                case "rfc":
                    everyInputs[i].addEventListener('blur',validarRfc);
                    break;
                case "contacto":
                    everyInputs[i].addEventListener('blur',validarContacto);
                    break;
                case "municipio":
                    everyInputs[i].addEventListener('blur',validarMunicipio);
                    break;
                case "estado":
                    everyInputs[i].addEventListener('blur',validarEstado);
                    break;

                default :break;
            }
    }
    function estilo(){
        this.style.backgroundColor="yellow";
    }
    function estilo2(inputElement){
        this.style.background='transparent';
        this.nextSibling.src="http://images.all-free-download.com/images/graphiclarge/tick_ok_sign_4190.jpg";
    }
    function estiloRojo(inElement){
        inElement.style.backgroundColor="#ff1a1a";
        inElement.nextSibling.src="http://griponclimate.files.wordpress.com/2013/03/wrong.png";
    }
       


    function validarNombre(){
            var nombre=document.getElementById("nombre");   
            var expresionRegular=/^[\s\S]{6,60}$/;
            if ((expresionRegular.test(nombre.value))==true){
                nombreOk=true;
                estilo2(nombre);
            }
            else {
                nombreOk=false;
                estiloRojo(nombre);
            }
    }

    function validarRfc(){
            var rfc=document.getElementById("rfc");
            var expresionRegular = /^([A-Z|a-z|&amp;]{3}\d{2}((0[1-9]|1[012])(0[1-9]|1\d|2[0-8])|(0[13456789]|1[012])(29|30)|(0[13578]|1[02])31)|([02468][048]|[13579][26])0229)(\w{2})([A|a|0-9]{1})$|^([A-Z|a-z]{4}\d{2}((0[1-9]|1[012])(0[1-9]|1\d|2[0-8])|(0[13456789]|1[012])(29|30)|(0[13578]|1[02])31)|([02468][048]|[13579][26])0229)((\w{2})([A|a|0-9]{1})){0,3}$/;
            if ((expresionRegular.test(rfc.value))==true){
                rfcOk=true;
                estilo2(rfc);
            }
            else {
                rfcOk=false;
                estiloRojo(rfc);
            }

    }
    function validarContacto(){
            var contacto=document.getElementById("contacto");   
            var expresionRegular=/^[\s\S]{6,50}$/;
            if ((expresionRegular.test(contacto.value))==true){
                contactoOk=true;
                estilo2(contacto);
            }
            else {
                contactoOk=false;
                estiloRojo(contacto);
            }
    }
    function validarMunicipio(){
            var municipio=document.getElementById("municipio");   
            var expresionRegular=/^[\s\S]{6,30}$/;
            if ((expresionRegular.test(municipio.value))==true){
                municipioOk=true;
                estilo2(municipio);
            }
            else {
                municipioOk=false;
                estiloRojo(municipio);
            }
    }
    function validarEstado(){
            var estado=document.getElementById("estado");   
            var expresionRegular=/^[\s\S]{6,30}$/;
            if ((expresionRegular.test(estado.value))==true){
                estadoOk=true;
                estilo2(estado);
            }
            else {
                estadoOk=false;
                estiloRojo(estado);
            }
    }
    function validarEmail(){
        var valorEmail=document.getElementById("correo");
        var expresionRegular=/^([\w-\.]{3,}\@.+\..+)$/;
        var email=convertirMinusculas(valorEmail.value);
        email=comprobarAtEmail(email);
        if ((expresionRegular.test(email))==true) {
            emailOk=true;
            estilo2(valorEmail);
        }
        else {
            emailOk=false;
            estiloRojo(valorEmail);   
        }
    }

    function passs () {
        var password=document.getElementById("password");
        if(password.value !=0) {
            passOk=true;
            estilo2(password);
        }else {
            passOk=false;
            estiloRojo(password);
        }
    }

    function passVal(){
          var password=document.getElementById("password");
          var password2=document.getElementById("password2");
          if( password.value == password2.value){
                pass2Ok=true;
                estilo2(password2);
          }
          else {
                pass2Ok=false;
                estiloRojo(password2);
                
           }
    }

    function validarDir(){
        var direccion=document.getElementById("direccion");
            if (direccion.value!=null){
                dirOk=true;
                estilo2(direccion);
            }
            else {
                dirOk=false;
                estiloRojo(direccion);
            }       
    }

    function validarTelefono(){
        var telefono=document.getElementById("telefono");
            var expresionRegular=/^\d{10}$/;
            if ((expresionRegular.test(telefono.value))==true){
                telOk=true;
                estilo2(telefono);
            }
            else {
                telOk=false;
                estiloRojo(telefono);
            }       
    }

    function validarCp () {
        var cp=document.getElementById("cp");
            var expresionRegular=/^\d{5}$/;
            if ((expresionRegular.test(cp.value))==true){
                cpOk=true;
                estilo2(cp);
            }
            else {
                cpOk=false;
                estiloRojo(cp);
            }
    }

    function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = [8,9,13, 37, 39, 46];
    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }
    if(letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
        }
    }   

    function soloNum(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    numeros = "0123456789";
    especiales = [8,9,13, 37, 39, 45,46];
    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }
    if(numeros.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
        }
    }
 


    function convertirMinusculas(email){
        return email.toLowerCase();   
        }
       
    function comprobarAtEmail(email){
        var expresion=/\sat\s/g;
        return email.replace(expresion,'@');
    }
}
function validarDatos(){
    var msg='Ingrese correctamente los datos en: ';
    if (nombreOk && rfcOk && contactoOk && municipioOk && estadoOk && emailOk && passOk && dirOk && telOk && cpOk && pass2Ok){
        
        return true;
    }else{
        if (nombreOk===false){
            msg = msg + '***Nombre';
        }
        if (rfcOk===false){
            msg = msg + '***RFC';
        }
        if (contactoOk===false){
            msg = msg + '***Contacto';
        }
        if (municipioOk===false){
            msg = msg + '***Municipio';
        }
        if (estadoOk===false){
            msg = msg + '***Estado';
        }
        if (emailOk===false){
            msg = msg + '***E-mail';   
        }        
        if (passOk===false){
            msg = msg + '***Password nulo';
        }
        if (dirOk===false){
            msg = msg + '***Direccion';
        }
        if (telOk===false){
            msg = msg + '***Telefono';
        }
        if (cpOk===false){
            msg = msg + '***Codigo Postal';
        }
        if (pass2Ok===false){
            msg = msg + '***Password no coinciden';
        }
        alert (msg);
        return false;
    }
}
</script>

    <div class="container">
      <h3>Registro de clientes nuevos</h3><br><br>

      <form class="form-horizontal" name="fvalida" method="post" action="registrarClienteNuevo.php" onsubmit="return validarDatos()">
        
        <div class="form-group" >
          <label class="control-label col-sm-1 ">Nombre:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese nombre de cliente" required autofocus min="4" max="60">
          </div>

          <label class="control-label col-sm-1">Contraseña:</label>
          <div class="col-sm-2">          
            <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese contraseña" required min="8" max="32" >
          </div>

          <label class="control-label col-sm-2">Confirmar Contraseña:</label>
          <div class="col-sm-2">          
            <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirme contraseña" required min="8" max="32" >
          </div>
        </div>        
       
        <div class="form-group">
          <label class="control-label col-sm-1">RFC:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="rfc" name="rfc" placeholder="Ingrese RFC" required>  
          </div>
          <label class="control-label col-sm-1" for="contacto">Contacto:</label>
          <div class="col-sm-5">          
            <input type="text" class="form-control" id="contacto" name="contacto" placeholder="Ingrese nombre de contacto directo" required min="4" max="30">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-1">Correo:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="correo" name="correo" placeholder="Ingrese correo electronico" required  >
          </div>
          <label class="control-label col-sm-1" for="telefono">Teléfono:</label>
          <div class="col-sm-5">          
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese teléfono a 10 digitos" required min="12" max="12">
          </div>
        </div>
        <br>

        <div class="form-group">
          <label class="control-label col-sm-1">Direccion:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese direccion" required >
          </div>
          <label class="control-label col-sm-1" for="cp">CP:</label>
          <div class="col-sm-2">          
            <input type="text" class="form-control" id="cp" name="cp" placeholder="Ingrese codigo postal" required min="5" max="5">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-1">Municipio:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Ingrese municipio" required >
          </div>
          <label class="control-label col-sm-1">Estado:</label>
          <div class="col-sm-5">          
            <input type="text" class="form-control" id="estado" name="estado" placeholder="Ingrese estado" required >
          </div>
        </div>
        <br>

        <div class="form-group">        
        <div class="col-sm-offset-11 col-sm-8">
          <button type="submit" class="btn btn-default"><strong>Guardar</strong></button>
        </div>      
      </form>
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
