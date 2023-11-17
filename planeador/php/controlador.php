<?php



if(!empty($_POST['btningresar'])) {
    if (empty($_POST["remail"]) and empty($_POST["Rpass"])){
        echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
    }else{

    $email = $_POST["remail"];
    $contraseña = $_POST["Rpass"];

    $sql=$conexion->query(" select * from usuarios where email = '$email' and contraseña = '$contraseña'");
    
    
    if($datos = $sql -> fetch_object()){
        header("location:../index.php");
    } else {
        echo '<div class="alert alert-danger">Acceso Denegado</div>';
    }
}
 }

 if(!empty($_POST['btnregistro'])) {
    if (empty($_POST["remail"]) and empty($_POST["Rpass"])){
        echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
    }else{

    $email = $_POST["remail"];
    $contraseña = $_POST["Rpass"];
    $nombres = $_POST["nombres"];
    $apellido_p = $_POST["ApellP"];
    $apellido_m = $_POST["ApellM"];    
    $usuario = $_POST["usuario"];
    $direccion = $_POST["direccion"];

    $query= "INSERT INTO usuarios (usuario, email, contraseña, nombres, apellido_p, apellido_m, direccion) VALUES ('$usuario','$remail', '$Rpass', '$nombres' , '$ApellP', '$ApellM', '$direccion')";
    $resultado = $conexion->query($query);
    
    if($datos = $resultado -> fetch_object()){
        header("location:../index.php");
    } else {
        echo '<div class="alert alert-danger">Acceso Denegado</div>';
    }
}
 }
?>