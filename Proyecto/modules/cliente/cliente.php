<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="/Proyecto/statics/css/main.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
    integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="fondo">


    <?php  include("../../includes/cliente_header.php")?>

    <div class="main-user">
    
    <?php  include("../../includes/cliente_user.php")?>


      <div class="administrar ">
        <div class="motivo">MENU</div>
        <div class="menu menu-cliente">
          <div class="opcion cliente" onclick="location.href = '../cliente/citas/citas.php'">
            <div class="titulo">
              <div class="tituloPrincipal">CITAS</div>
            </div>
            <div class="icono">
                <i class="far fa-calendar-plus fa-4x"></i>
            </div>
          </div>

          <div class="opcion cliente" onclick="location.href = '../administrador/admin_Cliente/admin_cliente.php'">
            <div class="titulo">
              <div class="tituloPrincipal">CONSULTAS</div>
            </div>
            <div class="icono">
            <i class="fas fa-notes-medical fa-4x"></i>
            </div>
          </div>

          <div class="opcion cliente" onclick="location.href = '../administrador/admin_Cliente/admin_cliente.php'">
            <div class="titulo">
              <div class="tituloPrincipal">MASCOTAS</div>
            </div>
            <div class="icono">
            <i class="fas fa-paw fa-4x"></i>
            </div>
          </div>

          <div class="opcion cliente" onclick="location.href = '../administrador/admin_Cliente/admin_cliente.php'">
            <div class="titulo">
              <div class="tituloPrincipal">PERFIL</div>
            </div>
            <div class="icono">
            <i class="fas fa-user fa-4x"></i>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <script src="/Proyecto/statics/js/cliente/cliente.js"></script>
    <script src="/Proyecto/statics/js/main.js"></script>
</body>

</html>