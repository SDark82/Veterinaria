<!--Codigo para validacion de inicio de sesión-->
<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    echo '
      <script>
        alert("Sesión no iniciada, favor ingresar datos de inicio de sesión");
        window.location="login.php";
        //SweetAlert();
      </script>
    ';
    session_destroy();
    die();
  }
 ?> <!--Fin de validacion de inicio de sesión-->
 
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Safari || Dashboard</title>
    <link rel="stylesheet" href="./css/main_clientes.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  </head>

  <body>
    <!--Trabajando con la sidebar donde estara el menu principal-->
    <div class="sidebar">
      <div class="sidebar-logo">
        <img src="images/logo.svg" height="90px" alt="">
      </div>
      <div class="sidebar-menu">
        <ul>
          <li><a href="dashboard.php" class="active"><span class="las la-home"></span>
            <span>Dashboard</span></a>
          </li>
          <li><a href="citas.php"><span class="las la-calendar"></span>
            <span>Citas</span></a>
          </li>
          <li><a href="mascotas.php"><span class="las la-paw"></span>
            <span>Mascotas</span></a>
          </li>
          <li><a href="comunidad.php"><span class="las la-users"></span>
            <span>Comunidad</span></a>
          </li>
          <li><a href="historial.php"><span class="las la-history"></span>
            <span>Historial</span></a>
          </li>
          <li><a href="perfil.php"><span class="las la-user-cog"></span>
            <span>Perfil</span></a>
          </li>
          <li><br><br><br>
            <button name="cerrar" id="botonCerrar">Cerrar Sesión</button>
          </li>
        </ul>
      </div><!--Fin de la clase que contiene el menu principal-->
    </div><!--Fin de la clase sidebar-->

    <!--Clase que contiene el resto de todo el contenido de la pagina-->
    <div class="main-content">

      <!--Barra de encabezado-->
      <header>
        <h2>
          <label for="">
            Dashboard
          </label>
        </h2>
        <div class="user-wrapper"> <!--Clase que presenta foto y nombre del usuario-->
          <img src="images/foto1.jpg" width="40px" height="40px" alt="">
          <div>
            <h4>Samuel Cruz</h4>
          </div>
        </div>
      </header>

      <!--Pantalla principal donde estaran las tarjetas y el resto del contenido-->
      <main>
        <div class="cards"> <!--Clase que encierra a todas las tarjetas mostradas-->

          <div class="card-single">
            <div>
              <h1>1</h1>
              <span>Mascotas</span>
            </div>
            <div>
              <span class="las la-paw"></span>
            </div>
          </div>

          <div class="card-single">
            <div>
              <h1>3</h1>
              <span>Consultas</span>
            </div>
            <div>
              <span class="las la-clipboard-list"></span>
            </div>
          </div>

          <div class="card-single">
            <div>
              <h1>4 Sept</h1>
              <span>Proxima Cita</span>
            </div>
            <div>
              <span class="las la-calendar"></span>
            </div>
          </div>

        </div><!--Fin de la clase de Cards-->

          <!--Pantalla para anuncion-->
          <div class="Anuncios"> 
            <article class="caja">
              <img src="images/Covid.jpg" alt="">
              <h2>¿Las mascotas se pueden contagiar de Covid19?</h2>
              <p>No, no hay datos que indiquen que animales de compañía o mascotas como gatos y perros puedan propagar el virus causante del Covid-19 en humanos. No obstante, sí que hay datos de que el virus se pueda contagiar de humano a animal y se han detectado casos positivos en felinos principalmente. <br><a href="#">Ver más...</a></p>
            </article>
            <article class="caja">
              <img src="images/vacuna1.jpg" alt="">
              <h2>¿Porque es importante vacunar a tus mascotas?</h2>
              <p>Nuestra mascota puede entrar en contacto con perros y gatos no controlados que sean portadores de muchas enfermedades, recordemos que vivimos en un mundo agresivo de virus y bacterias, lleno de peligros, que aunque no se vean pueden ocasionar mucho daño. <br><a href="#">Ver más...</a></p>
            </article>
            <article class="caja">
              <img src="images/Baño1.jpg" alt="">
              <h2>¿Con qué frecuencia debo bañar a mi perro?</h2>
              <p>Sin duda que la higiene de nuestro peludo es importante, pero también hay que tener cuidado para no hacerlo demasiado seguido, ya que esto puede terminar siendo poco beneficioso para la salud de su piel y pelaje, causando irritaciones y otros problemas asociados. <br><a href="#">Ver más...</a> </p>
            </article>
          </div>
      
        </main> <!--Fin pantalla principal-->

    </div>

    <script type="text/javascript" src="./js/portal_clientes.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!--Libreria para alertas animadas con JS-->
  </body>
</html>
