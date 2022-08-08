<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM empleado WHERE IdEmpleado='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Devolucion</title>
    <!--Importar CSS-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min (2).css">
    
</head>

<body background="1366_2000.jpg">
<div class="container" >

        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-2 col-md-3 col-xs-4 col-sm-3 col-xl-4 col-lg-4"></div>

            <div class="col-8 col-md-6 col-xs-4 col-sm-6 col-xl-4 col-lg-4">
                <div class="card text-white bg- mb-3">
                    
                    <div class="card-header text-center">
                        <h2>Editar Devolucion</h2>
                    <form action="update.php" method="POST">
                    </div>
                    <div class="card-body">
                        <form action="">
                        <input type="hidden" name="IdEmpleado" value="<?php echo $row['IdEmpleado']  ?>">




                            <div class="form-group mt-2">
                                <label for="">Nombre:</label>
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                                </div>
                                <div class="form-group mt-2">
                                <label for="">Apellido Paterno:</label>
                                <input type="text" class="form-control mb-3" name="ApellidoP" placeholder="ApellidoP" value="<?php echo $row['ApellidoP']  ?>">
                                </div>
                            <div class="form-group mt-2">
                                <label for="">Apellido Materno:</label>
                                <input type="text" class="form-control mb-3" name="ApellidoM" placeholder="ApellidoM"value="<?php echo $row['ApellidoM']  ?>">
                                </div>
                            <div class="form-group mt-2">
                                <label for="">Sexo:</label>
                                <input type="text" class="form-control mb-3" name="Sexo" placeholder="Sexo"value="<?php echo $row['Sexo']  ?>">
</div>
                            <div class="form-group mt-2">
                                <label for="">Edad:</label>
                                <input type="text" class="form-control mb-3" name="Edad" placeholder="Edad"value="<?php echo $row['Edad']  ?>">
                                </div>
                            <div class="form-group mt-2">
                            <label for="">Estudios</label>
                            <input type="text" class="form-control mb-3" name="Estudios" placeholder="Estudios"value="<?php echo $row['Estudios']  ?>">
</div>
<div class="form-group mt-2">
                            <label for="">Turno</label>
                            <input type="text" class="form-control mb-3" name="Turno" placeholder="Turno"value="<?php echo $row['Turno']  ?>">
</div>
        
        <div class="mt-2 d-grid grap-2 mt-3">
        <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </div>
    </form>
</div>
<div class="card-footer">
    <div class="row">
        <div class="col">

        </div>
        <div class="col">

        </div>
    </div>
</div>
</div>
</div>

<div class="col-2 col-md-3 col-xs-4 col-sm-3 col-xl-4 col-lg-4"></div>

</div>



</div>

<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>

</html>