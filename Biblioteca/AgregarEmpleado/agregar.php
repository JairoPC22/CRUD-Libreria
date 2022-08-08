<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM empleado";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <!--Importar CSS-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min (2).css">
    
</head>

<body background="1366_2000.jpg">
<div class="cover-container d-flex w-100 h-100 p-2 mx-auto flex-column">
            <header class="mb-auto">
                <div>
                    <nav class="nav nav-masthead justify-content-center float-md-start">
                    <a class="nav-link active" aria-current="page" href="http://localhost/Biblioteca/index.php">Inicio</a>

                        <a class="nav-link active" aria-current="page" href="http://localhost/Biblioteca/AgregarEmpleado/agregar2.php">Agregar Empleado</a>
                    </nav>
                </div>
            </header>

            <div class="container mt-7">
                    <div class="row">  

                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>IdEmpleado</th>
                                        <th>Nombre</th>
                                        <th>ApellidoP</th>
                                        <th>ApellidoM</th>
                                        <th>Sexo</th>
                                        <th>Edad</th>
                                        <th>Estudios</th>
                                        <th>Turno</th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IdEmpleado']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['ApellidoP']?></th>
                                                <th><?php  echo $row['ApellidoM']?></th>
                                                <th><?php  echo $row['Sexo']?></th>    
                                                <th><?php  echo $row['Edad']?></th>
                                                <th><?php  echo $row['Estudios']?></th>  
                                                <th><?php  echo $row['Turno']?></th>  
    
    
                                                <th><a href="actualizar.php?id=<?php echo $row['IdEmpleado'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['IdEmpleado'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                    </div>  
            </div>
    </body>
</html>