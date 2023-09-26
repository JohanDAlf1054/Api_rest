<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
echo "<script>alert('Inicio de sesion correctamente');</script>";
?>
<body>
    <div class="cerraSesion" >
        <form action="logout.php" method="post">
            <input type="submit" value="Cerrar sesion " class="btn_logout" >
        </form>
    </div>
</body>
</html>