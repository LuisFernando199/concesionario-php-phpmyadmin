<?php
include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM tabla_coches WHERE matricula='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <form action="consulta.php" method="POST">

            <input type="hidden" name="matricula" value="<?php echo $row['matricula']  ?>">
          
            <input type="text" class="form-control mb-3" name="marca" placeholder="marca" value="<?php echo $row['marca']  ?>">
            <input type="text" class="form-control mb-3" name="modelo" placeholder="modelo" value="<?php echo $row['modelo']  ?>">
            <input type="text" class="form-control mb-3" name="tipo" placeholder="tipo" value="<?php echo $row['tipo']  ?>">
            <input type="text" class="form-control mb-3" name="motor" placeholder="motor" value="<?php echo $row['motor']  ?>">
            <input type="text" class="form-control mb-3" name="color" placeholder="color" value="<?php echo $row['color']  ?>">
            <input type="number" class="form-control mb-3" name="cilindrada" placeholder="cilindrada" value="<?php echo $row['cilindrada']  ?>">
            <input type="number" class="form-control mb-3" name="precio" placeholder="precio" value="<?php echo $row['precio'] ?>">
            <input type="text" class="form-control mb-3" name="extras" placeholder="extras" value="<?php echo $row['extras']?>">
            
            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>