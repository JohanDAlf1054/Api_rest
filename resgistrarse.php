<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/registro.css" rel="stylesheet"/>
    <title>Registrarse</title>
</head>
<body>
    <div class="caja_form">
        <span class="borderlinea"></span>
        <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="GET">
            <h2>Registrarse</h2>
            <div class="cajaInfo">
                <!-- <input type="text" required="required"> -->
                <input type="text" name="name" required>
                <span>Nombre completo</span>
                <i></i>
            </div>
            <div class="cajaInfo">
                <!-- <input type="text" required="required"> -->
                <input type="email" name="email" required>
                <span>Correo electronico</span>
                <i></i>
            </div>
            <div class="cajaInfo">
                <!-- <input type="text" required="required"> -->
                <input type="text" name="phone" required>
                <span>Telefono</span>
                <i></i>
            </div>
            <div class="cajaInfo">
                <!-- <input type="text" required="required"> -->
                <input type="text" name="user" required>
                <span>Nombre usuario</span>
                <i></i>
            </div>
            <div class="cajaInfo">
                <!-- <input type="password" required="required"> -->
                <input type="password" name="password" required="required">
                <span>Contraseña</span>
                <i></i>
            </div>
            <input type="submit" value="Registrarse">
        </form>
    </div>
</body>
</html>

<?php

require_once("conn.php");

if( $_SERVER ['REQUEST_METHOD'] == 'GET'){
    $nombre = mysqli_real_escape_string($conn, $_GET['name']);
    $telefono = mysqli_real_escape_string($conn, $_GET['phone']);
    $correo = mysqli_real_escape_string($conn, $_GET['email']);
    $usuario = mysqli_real_escape_string($conn, $_GET['user']);
    $contrasena = mysqli_real_escape_string($conn, $_GET['password']);
    
    

    $insertar = "INSERT INTO usuarios VALUES( null,'$nombre','$correo','$contrasena','$telefono','$usuario')";

    if($conn -> query($insertar)=== TRUE){
        header("location: login.php");
        echo "Se ha registrado el usuario correctamente al sistema";
        
    }else{
        echo "Error al ingresar el registro: ". $conn ->error;
    }

    $conn -> close();
}

?>