'use strict'

//Declaracion de Variables
var boton_cerrar = document.getElementById('botonCerrar');

//Eventos
boton_cerrar.addEventListener("click", function(){
  Swal.fire({
    title: '¿Seguro que desea cerrar sesión?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Cerrar Sesión'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location = "php/cerrar_sesion.php";
    }
  });
});

//Funciones
function SweetAlert(){
  Swal.fire({
    icon: 'error',
    title: '¡ACCESO DENEGADO!',
    text: 'Necesita iniciar sesión primero',
  });
  window.location="login.php";
}