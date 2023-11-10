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
?>