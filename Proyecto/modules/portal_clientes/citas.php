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
    <title>Safari || Gestión de Citas</title>
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
          <li><br><br><br>
            <button name="cerrar" id="botonCerrar">Cerrar Sesión</button>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-content">
      <header>
      <h2>
          <label for="">
            Gestión de Citas
          </label>
        </h2>
        <div class="user-wrapper">
          <img src="images/foto1.jpg" width="40px" height="40px" alt="">
          <div>
            <h4>Samuel Cruz</h4>
          </div>
        </div>
      </header>

      <main>
        <!--Calendario interactivo-->
        <h1 class="titulo">Calendario</h1>

        <div class="Calendario">
          <div class="calendar_info">
            <div class="flecha_antes" id="mes_anterior">&#9664;</div>
            <div class="calendar_mes" id="mes"></div>
            <div class="calendar_año" id="year"></div>
            <div class="flecha_siguiente" id="siguiente_mes">&#9654;</div>
          </div>

          <div class="Calendar_week">
            <div class="dia_calendario">Lunes</div>
            <div class="dia_calendario">Martes</div>
            <div class="dia_calendario">Miércoles</div>
            <div class="dia_calendario">Jueves</div>
            <div class="dia_calendario">Viernes</div>
            <div class="dia_calendario">Sábado</div>
            <div class="dia_calendario">Domingo</div>
          </div>

          <div class="calendar_dates" id="dates"></div>

        </div><!--Fin de calendario-->
      </main>

    </div>

    <script type="text/javascript" src="./js/portal_clientes.js"></script>
    <script type="text/javascript" src="./js/calendario.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!--Libreria para alertas animadas con JS-->
  </body>
</html>
