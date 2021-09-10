<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Safari | Secretaria</title>
  <link rel="stylesheet" href="../../statics/css/main.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
    integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="fondo">


    <?php  include("../../includes/secretaria_header.php")?>

    <div class="main-user">


      <?php  include("../../includes/secretaria_user.php")?>


      <div class="administrar">
        <div class="motivo">SECRETARIA</div>
        <div class="menu">
          <div class="opcion cliente" onclick="location.href = '../secretaria/Clientes/s_administrarCliente.php'">
            <div class="titulo">
              <div class="tituloPrincipal">CLIENTES</div>
            </div>
            <div class="icono">
              <i class="fas fa-users fa-4x"></i>
            </div>
          </div>

          <div class="opcion cita"onclick="location.href = '../secretaria/Citas/s_administrarCita.php'">
            <div class="titulo">
              <div class="tituloPrincipal">CITAS</div>
            </div>
            <div class="icono">
              <i class="far fa-calendar-alt fa-4x"></i>
            </div>
          </div>

          <div class="opcion enfermedades" onclick="location.href = '../secretaria/Enfermedades/s_administrarEnfermedad.php'">
            <div class="titulo">
              <div class="tituloPrincipal">ENFERMEDADES</div>
            </div>
            <div class="icono">
              <i class="fas fa-viruses fa-4x"></i>
            </div>
          </div>

          <div class="opcion cirugia" onclick="location.href = '../secretaria/Cirugias/s_administrarCirugia.php'">
            <div class="titulo">
              <div class="tituloPrincipal">CIRUGIAS</div>
            </div>
            <div class="icono">
              <i class="fas fa-syringe fa-4x"></i>
            </div>
          </div>

          <div class="opcion jaula" onclick="location.href = '../secretaria/Jaulas/s_administrarJaula.php'">
            <div class="titulo">
              <div class="tituloPrincipal">JAULAS</div>
            </div>
            <div class="icono">
              <i class="fas fa-clinic-medical fa-4x"></i>
            </div>
          </div>

          <div class="opcion medicamento" onclick="location.href = '../secretaria/Medicamentos/s_administrarMedicamento.php'">
            <div class="titulo">
              <div class="tituloPrincipal">MEDICAMENTOS</div>
            </div>
            <div class="icono">
              <i class="fas fa-pills fa-4x"></i>
            </div>
          </div>

          <div class="opcion proveedores" onclick="location.href = '../secretaria/Proveedores/s_administrarProveedor.php'">
            <div class="titulo">
              <div class="tituloPrincipal">PROVEEDORES</div>
            </div>
            <div class="icono">
              <i class="fas fa-truck-loading fa-4x"></i>
            </div>
          </div>

          <div class="opcion equipo-medico" onclick="location.href = '../secretaria/Equipo_Medico/s_administrarEquipo.php'">
            <div class="titulo">
              <div class="tituloPrincipal">EQUIPO MEDICO</div>
            </div>
            <div class="icono">
              <i class="fas fa-briefcase-medical fa-4x"></i>
            </div>
          </div>

          <div class="opcion especie" onclick="location.href = '../secretaria/Especies/s_administrarEspecie.php'">
            <div class="titulo">
              <div class="tituloPrincipal">ESPECIES</div>
            </div>
            <div class="icono">
              <i class="fas fa-dna fa-4x"></i>
            </div>
          </div>

          <div class="opcion paciente" onclick="location.href = '../secretaria/Paciente/s_administrarPaciente.php'">
            <div class="titulo">
              <div class="tituloPrincipal">PACIENTES</div>
            </div>
            <div class="icono">
              <i class="fas fa-dog fa-4x"></i>
            </div>
          </div>

       

          <div class="opcion factura" onclick="location.href = '../secretaria/Facturas/s_administrarFactura.php'">
            <div class="titulo">
              <div class="tituloPrincipal">FACTURAS</div>
            </div>
            <div class="icono">
              <i class="fas fa-file-invoice-dollar fa-4x"></i>
            </div>
          </div>

          <div class="opcion reportes" onclick="location.href ='../secretaria/Reportes/s_administrarReporte.php'">
            <div class="titulo">
              <div class="tituloPrincipal">REPORTES</div>
            </div>
            <div class="icono">
              <i class="fas fa-file-alt fa-4x"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="../../statics/js/administrador/administrador.js"></script>
</body>

</html>