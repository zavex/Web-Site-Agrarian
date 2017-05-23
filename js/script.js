/* 
 * ============================================================================
 *  Metódo para conseguir la fecha (año)
 * ============================================================================
 */
function getFecha() {
    var fecha = new Date();
    return fecha.getFullYear();
}

/* 
 * ============================================================================
 *  Metódo para validar el formulario
 * ============================================================================
 */
 //Validacion
///^\s+$/.test(valor))

function validar() {
    //Usuario
    var usr = document.getElementById("usuario").value;
    if (usr == null || usr.length == 0 || /\s/.test(usr)) {
        alert("Captura un usuario valido.");
        document.getElementById("usuario").focus();
        return false;
    }
    
    //Contraseña
    var pwd = document.getElementById("pass").value;
    var pwd2 = document.getElementById("pass2").value;
    if (pwd == null || pwd.length == 0 || /\s/.test(pwd) || pwd2 == null || pwd2.length == 0 || /\s/.test(pwd2)) {
        alert("Captura una contraseña valida.");
        document.getElementById("pass").focus();
        document.getElementById("pass2").focus();
        return false;
    }
    
    if (pwd.length < 7 || pwd2.length < 7) {
        alert("Captura una contraseña con más de 8 caracteres.");
        document.getElementById("pass").focus();
        document.getElementById("pass2").focus();
        return false;
    }
    
     //Confirmar contraseña
    if (pwd != pwd2) {
        alert("Las contraseñas no son iguales.");
        document.getElementById("pass").focus();
        document.getElementById("pass2").focus();
        return false;
    }

    //Nombre
    var name = document.getElementById("nombre").value;
    if (name == null || name.length == 0 || /^\s+$/.test(name)) {
        alert("Captura un nombre valido.");
        document.getElementById("nombre").focus();
        return false;
    }
    
    //Paterno
    var pat = document.getElementById("paterno").value;
    if (pat == null || pat.length == 0 || /\s/.test(pat)) {
        alert("Captura un apellido paterno valido.");
        document.getElementById("paterno").focus();
        return false;
    }
    
    //Materno
    var mat = document.getElementById("materno").value;
    if (mat == null || mat.length == 0 || /\s/.test(mat)) {
        alert("Captura un apellido materno valido.");
        document.getElementById("materno").focus();
        return false;
    }
    
    //Direccion
    var dire = document.getElementById("dir").value;
    if (dire == null || dire.length == 0 || /^\s+$/.test(dire)) {
        alert("Captura una dirección valida.");
        document.getElementById("dir").focus();
        return false;
    }
    
    //Codigo postal
    var codp = document.getElementById("cp").value;
    if (!(/^\d{5}$/.test(codp))) {
        alert("Captura un codigo postal de 5 digitos.");
        document.getElementById("cp").focus();
        return false;
    }
    
    //Télefono
    var tele = document.getElementById("tel").value;
    if (!(/^\d{10}$/.test(tele))) {
        alert("Captura un número de télefono de 10 digitos.");
        document.getElementById("tel").focus();
        return false;
    }
    
    //Correo electrónico
    var email = document.getElementById("mail").value;
    var arroba = email.indexOf("@"); // Se asegura que haya una arroba
    var puntos = email.lastIndexOf("."); // Se asegura que haya un punto
    if (arroba < 1 || puntos < arroba + 2 || puntos + 2 >= email.length) {
        alert("Captura un correo electrónico.");
        document.getElementById("mail").focus();
        return false;
    }
    
    //Ciudad
    var indice = document.getElementById("ciudad").selectedIndex;
    if (indice == null || indice == 0) {
        alert("Selecciona una ciudad.");
        document.getElementById("ciudad").focus();
        return false;
    }
}

/* 
 * ============================================================================
 *  Metódo para solo ingresar numeros
 * ============================================================================
 */
function esInteger(e) {
    var charCode;
    charCode = e.keyCode;
    status = charCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

/* 
 * ============================================================================
 *  Metódo para solo ingresar letras
 * ============================================================================
 */
function soloLetras(e) {
    tecla = (document.all)?e.keyCode:e.which;
    patron = /[A-Z a-z áéíóú Ññ]/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}

/* 
 * ============================================================================
 *  Metódo para validar datos de sesión
 * ============================================================================
 */
function validarSesion() {
    //Usuario
    var usr = document.getElementById("usuario").value;
    if (usr == null || usr.length == 0 || /\s/.test(usr)) {
        alert("Captura un nombre de usuario.");
        document.getElementById("usuario").focus();
        return false;
    }
    
    //Contraseña
    var pwd = document.getElementById("pass").value;
    if (pwd == null || pwd.length == 0 || /\s/.test(pwd)) {
        alert("Captura una contraseña.");
        document.getElementById("pass").focus();
        return false;
    }
}