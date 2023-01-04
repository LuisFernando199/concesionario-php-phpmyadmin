<?php
include("conexion.php");
$con = conectar();
// obtencion de variables de la base datos
$matricula=$_POST['matricula'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$tipo=$_POST['tipo'];
$motor=$_POST['motor'];
$color=$_POST['color'];
$cilindrada=$_POST['cilindrada'];
$precio=$_POST['precio'];
$extras=$_POST['extras'];

// sentencia para insertar valores
$sql="INSERT INTO tabla_coches VALUES('$matricula','$marca','$modelo','$tipo','$motor','$color','$cilindrada','$precio','$extras')";
$query= mysqli_query($con,$sql);
// si es verdadera la conexion nos devuelve a menu
if($query){
    Header("Location: menu.php");
    
}else {
    echo "No ha realizado conexion";
}
?>