<?php
include 'conn.php';
$mensaje = '';
session_start();

if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $usuario = $_POST['user'];
    $contraseña = $_POST['password'];

    $validacion = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contraseña'");

    $_SESSION['user']=$usuario;
    $_SESSION['inicio_session'] = true;

    if(mysqli_num_rows($validacion)>0){
    header("location: inicio_pagina.html");
    }else{
    $mensaje= 'Credenciales incorrectas';
    }
}
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/inicio.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Login</title>
</head>
<body>
    <div class="caja_form">
        <span class="borderlinea"></span>
        <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="post">
            <h2>Iniciar Sesion</h2>
            <div class="cajaInfo">
                
                <input type="text" name="user" required="required" >
                <span>Usuario</span>
                <i></i>
            </div>
            <div class="cajaInfo">
               
                <input type="password" name="password" required="required">
                <span>Contraseña</span>
                <i></i>
            </div>
            <br>
            <div class="link">
                <a href="resgistrarse.php">Registrarse...</a>
            </div>
            <input type="submit" value="Iniciar Sesion">
            <?php if(isset($mensaje)){
                echo $mensaje;
            }?>
            
        </form>

        <script>
    <?php if (!empty($mensaje)) { ?>
        Swal.fire({
            title: "Datos incorrectos",
            text: "<?php echo $mensaje; ?>",
            icon: "error",
            timer: 2000, 
            timerProgressBar: true,
            showConfirmButton: true
        });
    <?php } ?>
</script>

    </div>
</body>
</html>




