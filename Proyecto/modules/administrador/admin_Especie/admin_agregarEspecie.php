<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administra | Especie</title>
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
                    <div class="motivo">AGREGAR CLIENTES</div>
                    <div class="atras" onclick="location.href = '../../administrador/administrador.php'">
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
                                    <div class="params">NOMBRE COMPLETO
                                    </div>
                                    <div class="params">CORREO ELECTRONICO
                                    </div>
                                    <div class="params">GENERO
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
                                </div>
                                <div class="col">
                                    <div class="params">USUARIO
                                    </div>
                                    <div class="params">CLAVE
                                    </div>
                                    <div class="params">IMAGEN
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
                                        <div class="valorFile">
                                        </div>
                                        <div class="params-op">
                                            OPCIONAL
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mascota">
                            <div class="titulo-mascota">
                                <div class="informacion-personal mascota-tittle">
                                    MASCOTAS
                                </div>
                                <div class="lista-mascotas">
                                </div>
                                <div class="msj-exito">
                                    <i class="fas fa-check"></i>
                                    MASCOTA AGREGADA
                                </div>
                                <div class="msj-delete">
                                    <i class="fas fa-times"></i>
                                    MASCOTA ELIMINADA
                                </div>
                            </div>

                            <div class="line-horizontal">
                            </div>
                            <div class="info-mascota">
                                <div class="info2">
                                    <div class="columna1">
                                        <div class="col">
                                            <div class="params">NOMBRE</div>
                                            <div class="params">FECHA DE NACIMIENTO</div>
                                            <div class="params">SEXO</div>
                                        </div>
                                        <div class="col inputs">
                                            <div class="values">
                                                <input type="text" spellcheck="false" id="name" class="entrada">
                                                <div class="duplicado">

                                                </div>
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
                                            <div class="values">
                                                <select name="" id="sexo" class="selection entrada">
                                                    <option value="" disabled selected value>SELECCIONE</option>
                                                    <option value="">MASCULINO</option>
                                                    <option value="">FEMENINO</option>
                                                </select>
                                                <div class="params-op">
                                                    OBLIGATORIO
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="info2">
                                    <div class="columna2">
                                        <div class="col">
                                            <div class="params">ESPECIE</div>
                                            <div class="params">RAZA</div>
                                        </div>
                                        <div class="col">
                                            <div class="values">
                                                <select name="" id="especie" class="selection entrada">
                                                    <option value="" disabled selected value>SELECCIONE</option>
                                                    <optgroup label="MAMIFEROS">
                                                        <option value="">PERRO</option>
                                                        <option value="">GATO</option>
                                                        <option value="">HAMSTER</option>
                                                        <option value="">CONEJO</option>
                                                        <option value="">CABALLO</option>
                                                        <option value="">OTRO MAMIFERO</option>
                                                    </optgroup>
                                                    <optgroup label="REPTILES">
                                                        <option value="">IGUANA</option>
                                                        <option value="">CAMALEON</option>
                                                        <option value="">TORTUGA</option>
                                                        <option value="">SERPIENTE</option>
                                                        <option value="">LAGARTO</option>
                                                        <option value="">OTRO REPTIL</option>
                                                    </optgroup>
                                                    <optgroup label="PECES">
                                                        <option value="">GUPPYS</option>
                                                        <option value="">TETRAS</option>
                                                        <option value="">PLATYS</option>
                                                        <option value="">BETA</option>
                                                        <option value="">OTRO PEZ</option>
                                                    </optgroup>
                                                    <optgroup label="ANFIBIOS">
                                                        <option value="">RANAS O SAPOS</option>
                                                        <option value="">SALAMANDRAS O TRITONES</option>
                                                        <option value="">CECILIAS O APODOS</option>
                                                        <option value="">OTRO ANFIBIO</option>
                                                    </optgroup>
                                                    <optgroup label="ARACNIDOS">
                                                        <option value="">ARAÑA</option>
                                                        <option value="">ESCORPION</option>
                                                        <option value="">OTRO ARACNIDO</option>
                                                    </optgroup>
                                                    <optgroup label="INSECTOS">
                                                        <option value="">HORMIGA</option>
                                                        <option value="">ABEJA</option>
                                                        <option value="">AVISPA</option>
                                                        <option value="">CHINCHE</option>
                                                        <option value="">CUCARACHA</option>
                                                        <option value="">MARIPOSA</option>
                                                        <option value="">OTRO INSECTO</option>
                                                    </optgroup>
                                                    <optgroup label="OTROS">
                                                        <option value="">CANGREJO O CAMARON</option>
                                                        <option value="">ESTRELLA O ERIZOS</option>
                                                        <option value="">CARACOL, ALMEJA O PULPOS</option>
                                                        <option value="">LOMBRIZ O GUSANO MARINO</option>
                                                        <option value="">ROTIFERO</option>
                                                        <option value="">GUSANO PLANO</option>
                                                        <option value="">MEDUSA O CORAL</option>
                                                        <option value="">ESPONJA</option>
                                                    </optgroup>

                                                </select>
                                                <div class="params-op">
                                                    OBLIGATORIO
                                                </div>
                                            </div>
                                            <div class="values">
                                                <select name="" id="raza" class="selection entrada">
                                                    <option value="" disabled selected value>SELECCIONE</option>
                                                </select>
                                                <div class="params-op">
                                                    OBLIGATORIO
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columna3">
                                        <div class="botones-mascota">
                                            <div class="button">
                                                <button class="boton-mascota verde">
                                                    AGREGAR MASCOTA
                                                </button>
                                                <div class="bloqueo" id="bloqueo">

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