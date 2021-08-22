<!--Codigo de verificacion de sesion iniciada-->
<?php
  session_start();

  if(isset($_SESSION['usuario'])){
    header("location: dashboard.php");
  }
?> <!--Fin del Codigo de verificacion de sesion iniciada-->

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <title>Safari || Pagina de Acceso</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style_login.css">
    <link rel="shortcut icon" href="images/favicon.png">
  </head>
  <body>
    <main>
      <div class="contenedor_todo">
        <div class="caja_trasera">
          <div class="caja_trasera_login">
            <h3>¿Ya tienes una cuenta?</h3>
            <p>Inicia sesión para ingresar al sistema</p>
            <button type="submit" id="btn_iniciar_sesion">Iniciar Seción</button>
          </div>
          <div class="caja_trasera_register">
            <h3>¿Aún no tienes una cuenta?</h3>
            <p>Registrate para ingresar al sistema</p>
            <button type="submit" id="btn_registrarse">Registrarse</button>
          </div>
        </div>

        <!--Formularios de login y registros-->
        <div class="contenedor_login_register">

          <!--Login-->
          <form class="formulario_login" action="php/login_usuario.php" method="POST">
            <h2>Iniciar Sesión</h2>
            <input type="text" placeholder="Correo Electrónico" name="correo">
            <input type="password" placeholder="Contraseña" name="password">
            <button>Entrar</button>
          </form>

          <!--registro-->
          <form class="formulario_register" action="php/registro_usuario.php" method="POST">
            <h2>Registrarse</h2>
            <input type="text" placeholder="Nombre Completo" name="nombre_completo">
            <input type="text" placeholder="Correo Electrónico" name="correo">
            <input type="text" placeholder="Usuario" name="usuario">
            <input type="password" placeholder="Contraseña"name="password">
            <button>Registrarse</button>
          </form>

        </div> <!--Fin de contenedor_login_register-->
      </div><!--Fin contenedor_todo-->
    </main>

    <script type="text/javascript" src="js/script_login.js"></script>

  </body>
</html>
