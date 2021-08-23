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
    confirmButtonText: 'Aceptar'
  }).then((result) => {
    if (result.isConfirmed) {
      window.moveTo()("php/cerrar_sesion.php");
    }
  });
});
