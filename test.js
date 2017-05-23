var user;
var user1;
var x;
var xx;

function alertaBox(mensaje) {
	var fecha = new Date();
	var mensajeCompleto = "**Importante**";
	mensajeCompleto += "\n\n"+mensaje + "\n\n";
	mensajeCompleto += "Permitiendo conexion a las: "+fecha.toTimeString()+"\n";
	mensajeCompleto += "\n"+"Por Codice Maya";
	alert(mensajeCompleto);
}
function user(){
	user = prompt("***SOLICITANDO ACCESO***" +"\n\n"+"Ingrese su nombre para entrar");
	user1=user;
	return user;
}
function showUser() {
	return user;
}


function showDate () {
	    document.write(" Fecha: "+Date());
}

function ejercicio1 () {
	user = prompt("Para saber longitud, ingrese su cadena de caracteres");
}

function validarForma() {
    x = document.getElementById("cadena").value;

    if (x == null || x == "") {
        alert("Valor invalido, ingrese cadena de caracteres");
        return false;
    }
    
}
function showRFC () {
	var nombre = document.getElementById("nombre").value;
	var paterno = document.getElementById("paterno").value;
	var materno = document.getElementById("materno").value;
	var nacim = document.getElementById("born").value;
	var pat = paterno.substring(0,2);
	var mat = materno.substring(0,1);
	var nam = nombre.substring(0,1);
	var ano = nacim.substring(8,10);
	var mes = nacim.substring(3,5);
	var dia = nacim.substring(0,2);
	var rfc = pat+mat+nam;
	var upRFC = rfc.toUpperCase();
   	document.getElementById("rfc").innerHTML="Tu RFC es "+upRFC+ano+mes+dia;
    return upRFC;
}
function showRes4 () {
	var name = document.getElementById("name").value;
	var namelen = name.length; 
	if (namelen <=7){
		var msje4 = "El nombre "+name+" es corto ya que tiene "+namelen+" caracteres.";
    	document.getElementById("msje4").innerHTML=msje4;
    	return msje4;
	}else{
		var msje4 = "El nombre "+name+" es largo ya que tiene "+namelen+" caracteres.";
    	document.getElementById("msje4").innerHTML=msje4;
    	return msje4;
	}
}

function showRes3 () {
	var digitChek = parseFloat(document.getElementById("digit").value);
	if (digitChek <=10){
		var msje3 = "El numero "+digitChek+" esta dentro del rango especificado";
    	document.getElementById("msje3").innerHTML=msje3;
    	return msje3;
	}else{
		var msje3 = "El numero "+digitChek+" no esta dentro del rango especificado";
    	document.getElementById("msje3").innerHTML=msje3;
    	return msje3;
	}
}
function showRes2 () {
	var num1 = parseFloat(document.getElementById("num1").value);
	var num2 = parseFloat(document.getElementById("num2").value);
    var result = parseFloat(num1+num2);
    var msje2 = "La suma de "+num1+" y "+num2+" es "+ result;
    document.getElementById("msje2").innerHTML=msje2;
    return msje2;
}

function showRes () {
	x = document.getElementById("cadena").value;
    xx = x.length;
    var msje = "La longitud es de: "+xx;
    document.getElementById("msje").innerHTML=msje;
    return msje;

}
function mostrarEdad1() {
		var ano = fecha.getFullYear();
        var anoo = fecha.getYear();
        document.write(ano);
    }

function showAge (){
	var fecha = new Date();
	var jdia = parseInt(document.getElementById("dia").value);
	var jmes = parseInt(document.getElementById("mes").value);
	var jano = parseInt(document.getElementById("ano").value);
	var anoactual=fecha.getFullYear()-jano;
	var mesactual = fecha.getMonth()+1;
	var diactual=fecha.getDate();
	if(jmes>=mesactual) {
		if(jdia>diactual){
			anoactual=anoactual-1;		
		}
	}
    document.getElementById("edad").innerHTML=anoactual;
    return anoactual;
}

function validar () {

	var valor=document.getElementById("nombre").value;
	if (valor==null || valor.length == 0 || /^\s+$/.test(valor)) {
		alert("Captura un nombre valido");
		document.getElementById("nombre").focus();
		return false;
	};

	var valor=document.getElementById("user").value;
	if (valor==null || valor.length == 0) {
		alert("Captura un usuario valido");
		document.getElementById("user").focus();
		return false;
	};

	var valor=document.getElementById("password").value;
	var valor2=document.getElementById("confirmPassword").value;
	if (valor==null || valor != valor2 ||valor.length < 8 || /^\s+$/.test(valor)) {
		alert("Captura una contraseña de 8 caracteres minimo");
		document.getElementById("password").focus();
		return false;
	};

		var valor=document.getElementById("paterno").value;
	if (valor==null || valor.length == 0 || /^\s+$/.test(valor)) {
		alert("Captura un apellido paterno valido");
		document.getElementById("paterno").focus();
		return false;
	};
		var valor=document.getElementById("materno").value;
	if (valor==null || valor.length == 0 || /^\s+$/.test(valor)) {
		alert("Captura un apellido materno valido");
		document.getElementById("materno").focus();
		return false;
	};


	var valor=document.getElementById("direccion").value;
		if (valor==null || valor.length == 0 || /^\s+$/.test(valor)) {
		alert("Captura una direccion valida");
		document.getElementById("direccion").focus();
		return false;
	};
	
	var valor=document.getElementById("telefono").value;
	if (!(/^\d{10}$/.test(valor))) {
		alert("Captura un telefono de 10 digitos");
		document.getElementById("telefono").focus();
		return false;
	};

	var valor=document.getElementById("mail").value;
	var arroba = valor.indexOf("@");
	var punto = valor.lastIndexOf(".");
	if (arroba < 1 || punto < arroba + 2 || punto + 2 >=valor.length) {
		alert("Captura un correo valido");
		document.getElementById("mail").focus();
		return false;	
	};

	var valor=document.getElementById("cp").value;
	if (!(/^\d{5}$/.test(valor))) {
		alert("Captura un codigo postal de 5 digitos");
		document.getElementById("cp").focus();
		return false;
	};

	var indice=document.getElementById("city").selectedIndex;
	if (indice == null || indice == 0) {
		alert("Seleccione una ciudad");
		document.getElementById("city").focus();
		return false;	

	};
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



function validars() {

	var valor=document.getElementById("user").value;
	if (valor==null || valor.length == 0) {
		alert("Captura un nombre de usuario");
		document.getElementById("user").focus();
		return false;
	};

	var valor=document.getElementById("password").value;
	if (valor==null ||valor.length < 8 || /^\s+$/.test(valor)) {
		alert("Captura una contraseña");
		document.getElementById("password").focus();
		return false;
	};
}