<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Editar Factura</title>
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

        <?php include("../../../includes/secretaria_header.php") ?>

        <div class="main-user">

            <?php include("../../../includes/secretaria_user.php") ?>


            <div class="contenedor">
                <div class="titulo-opcion">
                    <div class="motivo">EDITAR FACTURA</div>
                    <div class="atras" onclick="location.href = '../Facturas/s_administrarFactura.php'">
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
                                    <div class="params">ID DE DETALLE DE VENTA
                                    </div>
                                    <div class="params">ID DE VENTA
                                    </div>
                                    <div class="params">ID DEL PRODUCTO
                                    </div>
                                    <div class="params">ID DEL SERVICIO
                                    </div>
                                    <div class="params">CANTIDAD DE PRODUCTOS
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
                                    <div class="params">SUBTOTAL
                                    </div>
                                    <div class="params">IVA VENTA
                                    </div>
                                    <div class="params">TOTAL
                                    </div>
                                    <div class="params">EXENTO IVA
                                    </div>
                                    <div class="params">FECHA DE VENTA
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
                                                <input type="date" spellcheck="false" id="date" class="entrada">
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
    </div>
    <script src="/Veterinaria/Proyecto/statics/js/administrador/admin_cliente/admin_cliente.js"></script>
    <script src="/Veterinaria/Proyecto/statics/js/administrador/admin_cliente/admin_agregarCliente.js"></script>
</body>

</html>