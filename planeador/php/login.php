<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <center>
<form action="" method="POST">
        <?php
        include("conexion.php");
        include("controlador.php");
        ?>

    <div class="log" style="width: 800px; height: 600px; position: relative; background: white">
    <div class="Rectangle10" style="width: 800px; height: 600px; left: 0px; top: 0px; position: absolute; background: linear-gradient(90deg, #0E6EA4 31%, rgba(127.74, 144.59, 154.06, 0) 100%); border: 1px rgba(0, 0, 0, 0.20) solid"></div>
    <div class="Rectangle7" style="width: 800px; height: 600px; left: 0px; top: 0px; position: absolute; background: linear-gradient(180deg, #9BC6DE 78%, rgba(189.36, 231.37, 255, 0) 100%); border: 1px rgba(0, 0, 0, 0.20) solid"></div>
    <div class="marcoC" style="width: 335px; height: 385px; left: 233px; top: 118px; position: absolute; background: #ACE1FF"></div>
    <div class="Ingresa" style="left: 331px; top: 195px; position: absolute; text-align: center; color: black; font-size: 32px; font-family: Inter; font-weight: 700; word-wrap: break-word">INGRESA</div>
    <div>
        <input placeholder="*Correo electronico" id="remail" type="text" name="remail" style="width: 215px; height: 40px; left: 292px; top: 247px; position: absolute; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border: 2px black solid"/></div>
    <div>
        <input placeholder="*Contraseña" type="password" name="Rpass" style="width: 215px; height: 40px; left: 294px; top: 312px; position: absolute; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border: 2px black solid"/></div>
          <img class="imguser" style="width: 146px; height: 147px; left: 326px; top: 35px; position: absolute; border-radius: 107px" src="../img/img-login/user.png" />
          <img class="imgpass" style="width: 26px; height: 31px; left: 255px; top: 316px; position: absolute" src="../img/img-login/pass.png" />
          <img class="imgemail" style="width: 37px; height: 32px; left: 250px; top: 251px; position: absolute" src="../img/img-login/mail.png" />                
    <div class="EmojioneOkButton" style="width: 120px; height: 34px; left: 342px; top: 409px; position: absolute">
        <input type="submit" value="Ingresar" name="btningresar" style="width: 112.50px; height: 31.88px; left: 3.75px; top: -12px; color: white; font-size: 14px; font-family: Inter; position: absolute; font-weight: 700; background: #155C72" />
      </form>
<br>
      <p class="mt-3">¿No tienes una cuenta? <a href="registro.php">Registrate aqui</a> </p>
      </div>
      </div>
    
    </center>
    
</body>
</html>