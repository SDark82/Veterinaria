<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrador | Cirugía</title>
    <link rel="stylesheet" href="../../../statics/css/main.css" />
    <link rel="stylesheet" href="../../../statics/css/administrador/admin_Cliente/cliente.css">
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
                    <div class="motivo">AGREGAR CIRUGIA</div>
                    <div class="atras" onclick="location.href = '../admin_Cirugias/admin_Cirugia.php'">
                        ATRAS
                    </div>
                </div>
                <div class="botones">
                    <div class="boton verde">
                        <div class="image save">
                            <i class="fas fa-save"></i>
                        </div>
                        <div class="texto">
                            GUARDAR
                        </div>
                    </div>
                    <div class="line">

                    </div>
                    <div class="boton limpiar-button" id="limpiar-button">
                        <div class="texto-limpiar">
                            LIMPIAR
                        </div>
                    </div>

                </div>
                <div class="agregar cliente">
                    <div class="forma">
                        <div class="personal">
                            <div class="informacion-personal">
                                INFORMACION PERSONAL
                            </div>
                            <div class="line-horizontal">
                            </div>
                            <div class="info-personal">
                                <div class="col">
                                    <div class="params">ID CIRUGIA
                                    </div>
                                    <div class="params">ID MASCOTA
                                    </div>
                                    <div class="params">ID PERSONAL
                                    </div>
                                    <div class="params">MOTIVO
                                    </div>
                                    <div class="params">DESCRIPCION
                                    </div>
                                    <div class="params">ID SERVICIO
                                    </div>
                                </div>
                                <div class="col inputs">
                                    <div class="values">
                                        <input type="text" spellcheck="false" name="nombre">
                                        <div class="params-op">
                                            OBLIGATORIO
                                        </div>
                                    </div>
                                    <div class="values">
                                        <input type="email" spellcheck="false" name="correo">
                                        <div class="params-op">
                                            OBLIGATORIO
                                        </div>
                                    </div>
                                    <div class="values">
                                        <input type="text" spellcheck="false" name="prueba">
                                        <div class="params-op">
                                            OBLIGATORIO
                                        </div>
                                    </div>
                                    <div class="values">
                                        <input type="text" spellcheck="false" name="prueba">
                                        <div class="params-op">
                                            OBLIGATORIO
                                        </div>
                                    </div>
                                    <div class="values">
                                        <input type="text" spellcheck="false" name="prueba">
                                        <div class="params-op">
                                            OBLIGATORIO
                                        </div>
                                    </div>
                                    <div class="values">
                                        <input type="text" spellcheck="false" name="prueba">
                                        <div class="params-op">
                                            OBLIGATORIO
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="params">ID PRODUCTO
                                    </div>
                                    <div class="params">ID CITA
                                    </div>
                                    <div class="params">FECHA DE CIRUGIA
                                    </div>
                                    <div class="params">HORA DE CIRUGIA
                                    </div>
                                    <div class="params">BAJA DE CIRUGIA
                                    </div>
                                </div>
                                
                                <div class="col">
                                    <div class="values">
                                        <input type="text" spellcheck="false" name="usuario">
                                        <div class="params-op">
                                            OBLIGATORIO
                                        </div>
                                    </div>
                                    <div class="values">
                                        <input type="text" spellcheck="false" name="prueba">
                                        <div class="params-op">
                                            OBLIGATORIO
                                        </div>
                                    </div>
                                    <div class="values">
                                        <input type="text" spellcheck="false" name="prueba">
                                        <div class="params-op">
                                            OBLIGATORIO
                                        </div>
                                    </div>
                                    <div class="values">
                                        <input type="text" spellcheck="false" name="prueba">
                                        <div class="params-op">
                                            OBLIGATORIO
                                        </div>
                                    </div>
                                    <div class="values">
                                        <input type="text" spellcheck="false" name="prueba">
                                        <div class="params-op">
                                            OBLIGATORIO
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        


                    </div>

                </div>
            </div>
        </div>
        <script src="/Veterinaria/Proyecto/statics/js/administrador/admin_cliente/admin_cliente.js"></script>
        <script src="/Veterinaria/Proyecto/statics/js/administrador/admin_cliente/admin_agregarCliente.js"></script>
</body>

</html>