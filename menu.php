<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concesionario</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Datos coche</h1>
                <!--Formulario-->
                <form action="alta.php" method="POST">

                    <input type="text" class="form-control mb-3" name="matricula" placeholder="matricula">
                    <input type="text" class="form-control mb-3" name="marca" placeholder="marca">
                    <input type="text" class="form-control mb-3" name="modelo" placeholder="modelo">
                    <input type="text" class="form-control mb-3" name="tipo" placeholder="tipo">
                    <input type="text" class="form-control mb-3" name="motor" placeholder="motor">
                    <input type="text" class="form-control mb-3" name="color" placeholder="color">
                    <input type="number" class="form-control mb-3" name="cilindrada" placeholder="cilindrada">
                    <input type="number" class="form-control mb-3" name="precio" placeholder="precio">
                    <input type="text" class="form-control mb-3" name="extras" placeholder="extras">

                    <input type="submit" class="btn btn-primary" value="Alta">
                </form>
            </div>
                <!--Tabla de coches-->
            <div class="col-md-9">
                <h1>Tabla coches</h1>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Matricula</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Tipo</th>
                            <th>Motor</th>
                            <th>Color</th>
                            <th>Cilindrada</th>
                            <th>Precio</th>
                            <th>Extras</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                    //conexion a conexion.php que conecta con la base de datos
                    include("conexion.php");
                    $con = conectar();

                    $sql = "SELECT * FROM tabla_coches";
                    $query = mysqli_query($con, $sql);
                    //var_dump($query);
                    if (!$query) {
                        var_dump(mysqli_error($con));
                        exit;
                    }
                    //$row = mysqli_fetch_array($query); esto no hace falta
                    ?>
                    <tbody>

                        <?php
                        //tabla traida de la base de datos
                        if(! $query){
                            die('Could not get data: ' . mysqli_error($con));
                        }
                        while ($row = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td><?php echo $row['matricula'] ?></td>
                                <td><?php echo $row['marca'] ?></td>
                                <td><?php echo $row['modelo'] ?></td>
                                <td><?php echo $row['tipo'] ?></td>
                                <td><?php echo $row['motor'] ?></td>
                                <td><?php echo $row['color'] ?></td>
                                <td><?php echo $row['cilindrada'] ?></td>
                                <td><?php echo $row['precio'] ?></td>
                                <td><?php echo $row['extras'] ?></td>
                                <td><a href="actualizacion.php?id=<?php echo $row['matricula'] ?>"class="btn btn-info">Actualizar</a></td>
                                <td><a href="baja.php?id=<?php echo $row['matricula'] ?>" class="btn btn-danger">Baja</a></td>
                            </tr>
                        <?php }
                        var_dump($row) ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>