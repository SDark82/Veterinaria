<!--Codigo para validacion de inicio de sesión-->
<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    echo '
      <script>
        alert("Sesión no iniciada, favor ingresar datos de inicio de sesión");
        window.location="login.php";
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
    <title>Safari | Dashboard</title>
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
        </ul>
      </div>
    </div>

    <!--Clase que contiene el resto de todo el contenido de la pagina-->
    <div class="main-content">

      <!--Barra de encabezado-->
      <header>
        <h3>
          <label for="">
            <span class="las la-bars"></span>
            Dashboard
          </label>
        </h3>
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
          <!--
          <div class="Anuncios"> 
            <article class="caja">
              <img src="images/Covid.jpg" alt="" width="250px" height="190px">
            </article>
            <article class="caja">
              <img src="images/vacuna1.jpg" alt="" width="250px" height="190px">
            </article>
            <article class="caja">
              <img src="images/Baño1.jpg" alt="" width="250px" height="190px">
            </article>
          </div>-->

          </div>

      </main> <!--Fin pantalla principal-->

    </div>

    <script type="text/javascript" src="./js/portal_clientes.js"></script>
  </body>
</html>
