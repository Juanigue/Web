//Ejecucion de las funciones en eventos
document.getElementById("btnRegistro").addEventListener("click" , register);
document.getElementById("btnLogin").addEventListener("click" , login);
window.addEventListener("resize", anchoPagina);

//Declaracion de variables
var formularioLogin = document.querySelector(".formularioLogin");
var formularioRegistro = document.querySelector(".formularioRegistro");
var contenedorLoginRegistro = document.querySelector(".contenedorLoginRegistro");
var parteTraseraLogin = document.querySelector(".parteTraseraLogin");
var parteTraseraRegistro = document.querySelector(".parteTraseraRegistro");

//Funciones 
function anchoPagina(){
    if(window.innerWidth > 850){
        parteTraseraLogin.style.display = "block";
        parteTraseraRegistro.style.display = "block";
    }else{
        parteTraseraRegistro.style.display = "block";
        parteTraseraRegistro.opacity = "1";
        parteTraseraLogin.style.display = "none";
        formularioLogin.style.display = "block";
        formularioRegistro.style.display = "none";
        contenedorLoginRegistro.style.left = "0px";
    }
}
//Llamada de la funcion para asi cuando recargo la pagina Vuelve a ejecutarse y no se desacomoda de la pantalla
anchoPagina();
function login(){
    if(window.innerWidth > 850){
        formularioRegistro.style.display = "none";
        contenedorLoginRegistro.style.left = "10px";
        formularioLogin.style.display = "block";
        parteTraseraRegistro.style.opacity = "1";
        parteTraseraLogin.style.opacity = "0";
    }else{
        formularioRegistro.style.display = "none";
        contenedorLoginRegistro.style.left = "0px";
        formularioLogin.style.display = "block";
        parteTraseraRegistro.style.display = "block";
        parteTraseraLogin.style.display = "none";
    }
}
function register(){  
    if(window.innerWidth > 850){
        formularioRegistro.style.display = "block";
        contenedorLoginRegistro.style.left = "410px";
        formularioLogin.style.display = "none";
        parteTraseraRegistro.style.opacity = "0";
        parteTraseraLogin.style.opacity = "1";        
    }else{
        formularioRegistro.style.display = "block";
        contenedorLoginRegistro.style.left = "0px";
        formularioLogin.style.display = "none";
        parteTraseraRegistro.style.display = "none";
        parteTraseraLogin.style.display = "block";
        parteTraseraLogin.style.opacity = "1";
    }
}

