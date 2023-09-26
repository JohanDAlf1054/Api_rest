<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyect1";

$conn = new mysqli($servername, $username, $password, $dbname); 

if($conn -> connect_error){
    die("Error de conecxion" . $conn -> connect_error)."<br>";
}else{
    // echo "Conecxion Exitosa";
}

?>