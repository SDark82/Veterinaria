<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administra | Enfermedad</title>
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
                    <div class="motivo">EDITAR ENFERMEDAD</div>
                    <div class="atras" onclick="location.href = 'admin_cliente.php'">
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
                                <div class="columna-uno">
                                    <div class="col">
                                        <div class="params">NOMBRE COMPLETO
                                        </div>
                                        <div class="params">CORREO ELECTRONICO
                                        </div>
                                        <div class="params">GENERO
                                        </div>
                                        <div class="params">FECHA DE INGRESO
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
                                            <select name="" id="" class="selection" name="genero">
                                                <option value="" disabled selected value>SELECCIONE</option>
                                                <option value="">MASCULINO</option>
                                                <option value="">FEMENINO</option>
                                            </select>
                                            <div class="params-op">
                                                OBLIGATORIO
                                            </div>
                                        </div>
                                        <div class="values">
                                            <input type="text" spellcheck="false" readonly name="fechaIngreso">

                                        </div>

                                    </div>
                                </div>
                                <div class="columna-dos">
                                    <div class="info-usuario2">
                                        <div class="col">
                                            <div class="params">USUARIO
                                            </div>
                                            <div class="params">CLAVE
                                            </div>
                                            <div class="params">IMAGEN
                                            </div>
                                            <div class="params">ULTIMA CITA
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
                                                <input type="password" spellcheck="false" name="password">
                                                <div class="params-op">
                                                    OBLIGATORIO
                                                </div>
                                            </div>
                                            <div class="values">
                                                <label for="imageFile" class="subirArchivo">
                                                    SUBIR
                                                    <input type="file" spellcheck="false" id="imageFile" name="archivo">
                                                </label>
                                                <div class="params-op">
                                                    OPCIONAL
                                                </div>
                                            </div>
                                            <div class="values">
                                                <input type="text" spellcheck="false" readonly name="ultimaCita">

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
    </div>
    <script src="/Veterinaria/Proyecto/statics/js/administrador/admin_cliente/admin_cliente.js"></script>
    <script src="/Veterinaria/Proyecto/statics/js/administrador/admin_cliente/admin_agregarCliente.js"></script>
</body>

</html>