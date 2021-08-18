<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/Proyecto/statics/css/main.css" />
    <link rel="stylesheet" href="/Proyecto/statics/css/cliente/_cliente.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet">
</head>

<body>
    <div class="fondo">

        <?php  include("../../../includes/cliente_header.php")?>

        <div class="main-user">

        <?php  include("../../../includes/cliente_user.php")?>



            <div class="contenedor">
                <div class="titulo-opcion">
                    <div class="motivo">AGENDAR CITA</div>
                    <div class="atras" onclick="location.href = '../citas/citas.php'">
                        ATRAS
                    </div>
                </div>
                <div class="botones">
                    <div class="boton verde">
                        <div class="image save">
                            <i class="far fa-calendar-plus"></i>
                        </div>
                        <div class="texto">
                            AGENDAR
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
                        <div class="personal cita">
                            <div class="informacion-personal">
                                AGENDAR CITA
                            </div>
                            <div class="line-horizontal">
                            </div>
                            <div class="info-personal">
                                <div class="col">
                                    <div class="params">ELEGIR MASCOTA
                                    </div>
                                    <div class="params">VETERINARIO
                                    </div>
                                    <div class="params">FECHA
                                    </div>
                                </div>
                                <div class="col inputs">
                                    <div class="values">
                                        <select name="" id="" class="selection" name="genero">
                                            <option value="" disabled selected value>SELECCIONE</option>
                                            <option value="">Tommy</option>
                                            <option value="">Bethoven</option>
                                        </select>
                                        <div class="params-op">
                                            OBLIGATORIO
                                        </div>
                                    </div>
                                    <div class="values">
                                        <select name="" id="" class="selection" name="genero">
                                            <option value="" disabled selected value>SELECCIONE</option>
                                            <option value="">Dr. Marlon Arevalo</option>
                                            <option value="">Dr. Suyapa Mendoza</option>
                                        </select>
                                        <div class="params-op">
                                            OBLIGATORIO
                                        </div>
                                    </div>
                                    <div class="values">
                                        <input type="date" name="fecha" id="fecha">
                                        <div class="params-op">
                                            OBLIGATORIO
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="params">HORARIO
                                    </div>
                                    <div class="params textareas">MOTIVO DE CITA
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="values">
                                    <select name="" id="" class="selection" name="genero">
                                            <option value="" disabled selected value>SELECCIONE</option>
                                            <option value="">8:00 AM</option>
                                            <option value="">9:00 AM</option>
                                            <option value="">10:00 AM</option>
                                            <option value="">11:00 AM</option>
                                            <option value="">1:00 PM</option>
                                            <option value="">2:00 PM</option>
                                            <option value="">3:00 PM</option>
                                            <option value="">4:00 PM</option>
                                            
                                        </select>
                                        <div class="params-op">
                                            OBLIGATORIO
                                        </div>
                                    </div>
                                    <div class="values textareas">
                                        <textarea name="motivo" id="motivo" cols="30" rows="5" spellcheck="false"></textarea>
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
        <script src="/Proyecto/statics/js/cliente/cliente.js"></script>
        <script src="/Proyecto/statics/js/main.js"></script>
        <script src="/Proyecto/statics/js/administrador/admin_cliente/admin_agregarCliente.js"></script>
    </body>

</html>