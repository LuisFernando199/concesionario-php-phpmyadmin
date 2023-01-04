<?php
//consultamos si podemos editar en actualizacion.php
include("conexion.php");
$con=conectar();

$matricula=$_POST['matricula'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$tipo=$_POST['tipo'];
$motor=$_POST['motor'];
$color=$_POST['color'];
$cilindrada=$_POST['cilindrada'];
$precio=$_POST['precio'];
$extras=$_POST['extras'];
// peticion para editar
$sql="UPDATE tabla_coches SET marca='$marca',modelo='$modelo',tipo='$tipo',motor='$motor',color='$color',cilindrada='$cilindrada',precio='$precio',extras='$extras' WHERE matricula ='$matricula'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: menu.php");
    }
?>
