<?php
require_once('conexion.php');

if(empty($_POST['Nombres']) || empty($_POST['Email'])) {
    
    echo "por favor llene los campos correspondientes";
    
}else{
    $nombres = $_POST['Nombres'];
    $apellido_p = $_POST['Apellido_P'];
    $apellido_m = $_POST['Apellido_M'];
    $usuario = $_POST['Usuario'];
    $email = $_POST['Email'];
    $pass = $_POST['Contraseña'];
    
    $query= "INSERT INTO usuarios (nombres, apellido_m, apellido_p, email, contraseña, usuario) VALUES ('$nombres','$apellido_m', '$apellido_p','$email', '$pass' , '$usuario')";
    $resultado = $conexion->query($query);

    if ($resultado) {
        echo "Se han insertado los datos";
        header('Location: login.php');
    }else{ 
        echo "No se han insertado los datos";
         }

  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data" style="background-color:#0000" width="40%" >
<center>
<div class="Registro" style="width: 800px; height: 600px; position: relative; background: white">
  <div class="Rectangle7" style="width: 800px; height: 750px; left: 0px; top: 0px; position: absolute; background: linear-gradient(180deg, #80BCDD 13%, rgba(189.36, 231.37, 255, 0) 100%); border: 1px rgba(0, 0, 0, 0.20) solid"></div>
  
  <div class="Rectangle9" style="width: 450px; height: 62px; left: 175px; top: 26px; position: absolute; background: #1188FF"></div>
  <div class="Registrarse" style="left: 272px; top: 38px; position: absolute; color: white; font-size: 32px; font-family: Inter; font-weight: 700; letter-spacing: 3.20px; word-wrap: break-word">REGISTRARSE</div>
  <div class="Rectangle10" style="width: 400px; height: 50px; left: 200px; top: 115px; position: absolute; background: #D9D9D9"></div>
  <div class="Rectangle11" style="width: 400px; height: 50px; left: 200px; top: 181px; position: absolute; background: #D9D9D9"></div>
  <div class="Rectangle12" style="width: 400px; height: 50px; left: 200px; top: 247px; position: absolute; background: #D9D9D9"></div>
  <div class="Rectangle13" style="width: 400px; height: 50px; left: 200px; top: 313px; position: absolute; background: #D9D9D9"></div>
  <div class="Rectangle14" style="width: 400px; height: 50px; left: 200px; top: 379px; position: absolute; background: #D9D9D9"></div>

  
  <div class="Rectangle8" style="width: 450px; height: 594px; left: 175px; top: 88px; position: absolute; background: #1F3B4F">
  <input type="text" name="Nombres" placeholder="Nombres" style="width: 393px; height: 45px; left: 25px; top: 20px; position: absolute; opacity: 0.40; color: black; font-size: 15px; font-family: Inter; font-weight: 400; letter-spacing: 1.50px; word-wrap: break-word"/>
  <input type="text" name="Apellido_P" placeholder="Apellido Paterno" style="width: 393px; height: 45px; left: 25px; top: 100px; position: absolute; opacity: 0.40; color: black; font-size: 15px; font-family: Inter; font-weight: 400; letter-spacing: 1.50px; word-wrap: break-word"/>
  <input type="text" name="Apellido_M" placeholder="Apellido Materno" style="width: 393px; height: 45px; left: 25px; top: 180px; position: absolute; opacity: 0.40; color: black; font-size: 15px; font-family: Inter; font-weight: 400; letter-spacing: 1.50px; word-wrap: break-word"/>
  <input type="text" name="Usuario" placeholder="Usuario" style="width: 393px; height: 45px; left: 25px; top: 260px; position: absolute; opacity: 0.40; color: black; font-size: 15px; font-family: Inter; font-weight: 400; letter-spacing: 1.50px; word-wrap: break-word"/>
  <input type="email" name="Email" placeholder="Email" style="width: 393px; height: 45px; left: 25px; top: 340px; position: absolute; opacity: 0.40; color: black; font-size: 15px; font-family: Inter; font-weight: 400; letter-spacing: 1.50px; word-wrap: break-word"/>
  <input type="password" name="Contraseña" placeholder="Contraseña" style="width: 393px; height: 45px; left: 25px; top: 420px; position: absolute; opacity: 0.40; color: black; font-size: 15px; font-family: Inter; font-weight: 400; letter-spacing: 1.50px; word-wrap: break-word"/>
  <input type="submit" name="Guardar" value="Aceptar" style="width: 143px; height: 51px; left: 150px; top: 496px; position: absolute; background: #1188FF">
  
    </div>
    
  </div>
</div>
</center>
</form>
</body>
</html>