
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="main.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet">
  <title>Veterinaria Safari</title>
</head>

<body>
  <div class="main">
    <div class="carousel" id="carousel">
      <div class="card1">
        <div class="curiosidades">
          <div class="curiosidad1" id="curiosidad1">
            ¿Sabias que? <br />
            <div class="blur">
            </div>
              El rugido del león puede ser escuchado<br />
              hasta a 9 kilómetros de distancia. <br />
              Les ayuda a encontrar a otros leones, así <br />como para
              proclamar su territorio.
          </div>
          <div class="curiosidad2" id="curiosidad2">
            ¿Sabias que? <br />
            <div class="blur">
            </div>
              Una de las mayores curiosidades de las jirafas <br />
              es que ellas no duermen. Los estudios demuestran <br />
              que pueden dormir únicamente entre 10 minutos y <br />
              2 horas. Además, duermen de pie.
          </div>
          <div class="curiosidad3" id="curiosidad3">
            ¿Sabias que? <br />
              Alrededor de 30.000 elefantes mueren al año <br />debido a cazas
              ilegales para traficar <br />el marfil de sus colmillos.
          </div>
          <div class="curiosidad4" id="curiosidad4">
            ¿Sabias que? <br />
            <div class="blur">
            </div>
              Los perros comprenden aproximadamente 250 palabras o gestos,
              <br />
              Muy similar a lo que le ocurre a un niño de 2 años.<br />
              Por eso, es tan común que perros y niños pequeños <br />
              se suelan llevar tan bien…
          </div>
          <div class="curiosidad5" id="curiosidad5">
            ¿Sabias que? <br />
            <div class="blur">
            </div>
             Los gatos pueden pasar hasta 14 horas dormidos.<br>
              Debido a su naturaleza nocturna, los gatos suelen <br>
              ser mucho más hiperactivos en la tarde.
          </div>
        </div>
      </div>

    </div>

    <div class="login">
      <div class="imglogo">
        <img src="statics/img/Logo1Mesa de trabajo 1.svg" alt="" class="login-logo" />
      </div>
      
      <div class="img-user">
        <div class="photo" id="photo">
          <img src="statics/img/userMesa de trabajo 1.svg" alt="" />
          <img src="" alt="" id="photo-user" />
        </div>
      </div>
      
      <div class="text-box">
        <div class="icon">
          <i class="fas fa-user" style="color: white;"></i>
        </div>
        <input type="text" class="cuadro-texto" placeholder="Usuario" spellcheck="false" id="user" />
      </div>
      <div class="text-box">
        <div class="icon">
          <i class="fas fa-lock" style="color: white;"></i>
        </div>
          <input type="password" class="cuadro-texto" spellcheck="false" placeholder="Clave" id="password" />
      </div>
      
      <div class="buttons">
        <input type="submit" class="btn" value="INGRESAR" onclick="location.href = location.href = 'modules/administrador/administrador.php'" />
      <input type="button" class="registrarse" value="REGISTRARSE" />
      </div>

  </div>
  
  </div>
</body>
<script src="main.js"></script>

</html>