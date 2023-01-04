<?php
// Conecion con la base de datos 
function conectar(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "concesionario";

    $con = mysqli_connect($host,$user,$pass,$bd);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    

    mysqli_select_db($con,$bd);

    return $con;
}
?>