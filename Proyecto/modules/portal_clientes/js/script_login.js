'use strict'

//Eventos
document.getElementById("btn_registrarse").addEventListener("click", register);
document.getElementById("btn_iniciar_sesion").addEventListener("click", login);

//Declaracion de variables
var contenedor_login_register = document.querySelector(".contenedor_login_register");
var formulario_login = document.querySelector(".formulario_login");
var formulario_register = document.querySelector(".formulario_register");
var caja_trasera_login = document.querySelector(".caja_trasera_login");
var caja_trasera_register = document.querySelector(".caja_trasera_register");

//funciones
function register() {
  formulario_register.style.display ="block";
  contenedor_login_register.style.left = "410px";
  formulario_login.style.display = "none";
  caja_trasera_register.style.opacity = "0";
  caja_trasera_login.style.opacity = "1";
}

function login() {
  formulario_register.style.display ="none";
  contenedor_login_register.style.left = "10px";
  formulario_login.style.display = "block";
  caja_trasera_register.style.opacity = "1";
  caja_trasera_login.style.opacity = "0";
}

function sweetAlert(titulo,texto,icono){
  Swal.fire({
    title: titulo,
    text: text,
    icon: icono,
  });
}

