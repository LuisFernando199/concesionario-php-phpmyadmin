<?php

include("conexion.php");
$con=conectar();

$matricula=$_GET['id'];

$sql="DELETE FROM tabla_coches  WHERE matricula='$matricula'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: menu.php");
    }
?>