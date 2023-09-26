<?php 
$mesajecerrar = '';
$mensjaeincorrecto = '';

session_start();

if(isset($_SESSION['user']) || $_SESSION['user']!== true){
    session_unset();
    session_destroy();
    $mesajecerrar = "Has cerrado Sesion";
}else{
    $mensjaeincorrecto = "Por favor inicie sesion";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Cerrar sesion</title>
</head>
<body>
<script>
    <?php if (!empty($mesajecerrar)) { ?>
        Swal.fire({
            title: "Cierre de sesion",
            text: "<?php echo $mesajecerrar; ?>",
            icon: "success",
            timer: 2000, 
            timerProgressBar: true,
            showConfirmButton: true
        }).then(function() {
            window.location.href = 'login.php';
        });
    <?php }?>
        
</script>
</body>
</html>