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
    <title>Safari | Citas</title>
    <link rel="stylesheet" href="./css/main_clientes.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  </head>

  <body>
    <div class="sidebar">
      <div class="sidebar-logo">
        <img src="images/logo.svg" height="90px" alt="">
      </div>
      <div class="sidebar-menu">
        <ul>
          <li><a href="dashboard.php"><span class="las la-home"></span>
            <span>Dashboard</span></a>
          </li>
          <li><a href="citas.php" class="active"><span class="las la-calendar"></span>
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
          <li><a href="php/cerrar_sesion.php"><span class="las la-door-closed"></span>
            <span>Cerrar Sesión</span></a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-content">
      <header>
        <h3>
          <label for="">
            <span class="las la-bars"></span>
            Gestión de Citas
          </label>
        </h3>
        <div class="user-wrapper">
          <img src="images/foto1.jpg" width="40px" height="40px" alt="">
          <div>
            <h4>Samuel Cruz</h4>
          </div>
        </div>
      </header>

      <main>

      </main>

    </div>

    <script type="text/javascript" src="./js/portal_clientes.js"></script>
  </body>
</html>
