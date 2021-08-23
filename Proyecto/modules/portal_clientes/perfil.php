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
    <title>Safari || Perfil de Usuario</title>
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
          <li><a href="perfil.php" class="active"><span class="las la-user-cog"></span>
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
            Perfil de Usuario
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

        <div class="Contenedor_Datos_Usuario">
          <h2>Datos de Usuario</h2><br>
          <form action="">
            <p><label for="InputUsuario">Usuario</label><br>
            <input type="text" name="InputUsuario" id="nickname" placeholder="SDark82" readonly="readonly"></p><br>
            <p><label for="InputCorreo">Correo Electrónico</label><br>
            <input type="text" name="InputCorreo" id="CorreoUsuario" placeholder="SamuelCruz.hn@hotmail.com" readonly="readonly"></p><br>
            <div class="FormCambioPass">
              <button name="cambioPassword">¿Desea cambiar la contraseña?</button><br><br>
              <p><label for="ActualPassword">Ingresa la Contraseña Actual</label><br>
              <input type="password" name="ActualPassword" id="ActualPasswordUsuario"></p>
              <p><label for="InputPassword">Contraseña Nueva</label><br>
              <input type="password" name="InputPassword" id="PasswordUsuario"></p>
              <p><label for="VerifiquePassword">Verificar Contraseña</label><br>
              <input type="password" name="VerifiquePassword" id="VerifyUserPass"></p><br>
              <button name="Cambiar">Cambiar Contraseña</button><br>
            </div>
          </form>
        </div>

        <div class="Contenedor_Datos_Cliente">
          <h2>Datos Generales de Cliente</h2><br>
          <form action="">
            <p><label for="InputUsuario">Nombre Completo</label><br>
            <input type="text" name="Nombre" placeholder="Samuel Cruz"></p><br>
            <p><label for="Identidad">Identidad</label><br>
            <input type="text" name="Identidad" id="Identidad" ></p><br>
            <label for="genero">Genero</label><br>
            <input type="radio" name="genero" value="hombre"> Hombre <br>
            <input type="radio" name="genero" value="mujer"> Mujer <br><br>
            <p><label for="TelefonoResidencia">Telefono de Residencia</label><br>
            <input type="text" name="TelefonoResidencia" id="TelefonoResidencia" ></p><br>
            <p><label for="TelefonoMovil">Telefono Movil</label><br>
            <input type="text" name="TelefonoMovil" id="TelefonoMovil" ></p><br>
            <p><label for="Direccion">Dirección de Residencia</label><br>
            <input type="text" name="Direccion" id="Direccion" ></p><br>
            <button name="GuardarDatos">Guardar Datos de Cliente</button><br>
          </form>
        </div>

      </main>

    </div>

    <script type="text/javascript" src="./js/portal_clientes.js"></script>
  </body>
</html>
