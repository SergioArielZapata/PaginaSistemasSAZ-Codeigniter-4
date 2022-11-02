document.getElementById("btn_registrarse").addEventListener("click", registro);
document.getElementById("btn_iniciar-sesion").addEventListener("click", iniciarSesion);
window.addEventListener("resize", anchoPagina);
//Declaracion de variables
var contenedor_loginRegistro = document.querySelector(".contenedor_login-registro");
var formulario_login = document.querySelector(".formularioLogin");
var formulario_registro = document.querySelector(".formularioRegistro");
var caja_trasera_login = document.querySelector(".caja_trasera-login");
var caja_trasera_registro = document.querySelector(".caja_trasera-registro");

function anchoPagina(){
    if(window.innerWidth > 850){
        caja_trasera_login.style.display = "block";
        caja_trasera_registro.style.display = "block";        
    }else{
        caja_trasera_registro.style.display = "block";
        caja_trasera_registro.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_registro.style.display = "none";
        contenedor_loginRegistro.style.left = "0px";
    }
}

function iniciarSesion(){
    if(window.innerWidth > 850){
        formulario_registro.style.display = "none";
        contenedor_loginRegistro.style.left = "10px";
        formulario_login.style.display = "block";
        caja_trasera_registro.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";    
    }else{
        formulario_registro.style.display = "none";
        contenedor_loginRegistro.style.left = "0px";
        formulario_login.style.display = "block";
        caja_trasera_registro.style.display	 = "block";
        caja_trasera_login.style.display = "none";
    }
    
}

function registro(){
    if(window.innerWidth > 850){
        formulario_registro.style.display = "block";
        contenedor_loginRegistro.style.left = "410px";
        formulario_login.style.display = "none";
        caja_trasera_registro.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    }else{
        formulario_registro.style.display = "block";
        contenedor_loginRegistro.style.left = "0px";
        formulario_login.style.display = "none";
        caja_trasera_registro.style.display	 = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.opacity = "1"
    }    
}

function funcionRegistro(){
    alert("has sido registrado exitosamente, Felicitaciones!!!");
    }
