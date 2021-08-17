<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administra | Proveedor</title>
    <link rel="stylesheet" href="/Veterinaria/Proyecto/main.css" />
    <link rel="stylesheet" href="/Veterinaria/Proyecto/statics/css/administrador/admin_Cliente/cliente.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet">
</head>

<body>
    <div class="fondo">

        <?php include("../../../includes/admin_header.php") ?>

        <div class="main-user">

            <?php include("../../../includes/admin_user.php") ?>

            <div class="contenedor">
                <div class="titulo-opcion">
                    <div class="motivo">PROVEEDORES</div>
                    <div class="atras" onclick="location.href = '../../administrador/administrador.php'">
                        ATRAS
                    </div>
                </div>
                <div class="botones">
                    <div class="boton verde" onclick="location.href = 'admin_agregarCliente.php'">
                        <div class="image">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="texto">
                            AGREGAR
                        </div>
                    </div>
                    <div class="line">

                    </div>
                    <div class="boton" id="editar" onclick="location.href = 'admin_editarCliente.php'">
                        <div class="image">
                            <i class="fas fa-pen"></i>
                        </div>
                        <div class="texto">
                            EDITAR
                        </div>
                    </div>
                    <div class="boton rojo" id="eliminar" onclick="accionEliminar()">
                        <div class="image">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="texto">
                            ELIMINAR
                        </div>
                    </div>
                    <div class="difuminacion">

                    </div>
                </div>
                <div class="clientes">
                    <div class="descripcion">
                        <div class="herramientas">
                            <div class="buscador">
                                <div class="icono-buscar">
                                    <i class="fas fa-search"></i>
                                </div>
                                <div class="cajaTexto-buscar">
                                    <input type="text" spellcheck="false" placeholder="BUSCAR NOMBRE O ID" id="buscar">
                                </div>
                            </div>
                            <div class="limpiar" onclick="limpiar()">
                                LIMPIAR
                            </div>
                        </div>
                        <div class="total-clientes">
                            TOTAL &nbsp;<span class="clientesTotales">2</span>
                        </div>
                    </div>

                    <div class="tabla-clientes">
                        <table id="tb-cliente" class="tabla">
                            <thead>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>CORREO</th>
                                <th>USUARIO</th>
                                <th>CLAVE</th>
                                <th>MASCOTA 1</th>
                                <th>MASCOTA 2</th>
                                <th>MASCOTA 3</th>
                                <th>FECHA DE REGISTRO</th>
                                <th>ULTIMA CITA</th>


                            </thead>
                            <tbody>
                                <tr class="filas" onclick="filas(event)">
                                    <td>CL-01</td>
                                    <td>Jose Miguel Acosta Carias</td>
                                    <td>jose.m.acosta1996@gmail.com</td>
                                    <td>josea123</td>
                                    <td>Hola123</td>
                                    <td>Loky</td>
                                    <td>Tomy</td>
                                    <td>Toty</td>
                                    <td>10/05/2021</td>
                                    <td>15/07/2021</td>
                                </tr>

                                <tr class="filas" onclick="filas(event)">
                                    <td>CL-02</td>
                                    <td>Miguel Angel Rodriguez</td>
                                    <td>mangel@gmail.com</td>
                                    <td>mangel123</td>
                                    <td>contrasena</td>
                                    <td>Pongo</td>
                                    <td>Beethoven</td>
                                    <td></td>
                                    <td>22/12/2020</td>
                                    <td>01/01/2021</td>
                                </tr>
                                <tr class="filas" onclick="filas(event)">
                                    <td>CL-03</td>
                                    <td>Luisa Maria Martinez Rodriguez</td>
                                    <td>luisamaria@gmail.com</td>
                                    <td>luisa2021</td>
                                    <td>hola</td>
                                    <td>Lassie</td>
                                    <td></td>
                                    <td></td>
                                    <td>10/03/2021</td>
                                    <td>26/04/2021</td>
                                </tr>



                            </tbody>
                        </table>
                    </div>
                </div>


            </div>

        </div>

        <div class="eliminar">
            <div class="mensaje color-blanco-transparente">

                <div class="eliminar-mensaje">
                    ¿ESTA SEGURO QUE DESEA ELIMINAR A <span id="nombreClienteEliminado"></span> ?
                </div>

                <div class="eliminar-buttons">
                    <div class="default-btn color-rojo-hover">
                        ELIMINAR
                    </div>
                    <div class="default-btn color-secudario-hover" onclick="cancelarEliminar()">
                        CANCELAR
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/Veterinaria/Proyecto/statics/js/administrador/admin_cliente/admin_cliente.js"></script>
</body>

</html>