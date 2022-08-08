<?php

include("conexion.php");
$con=conectar();

$IdEmpleado=$_GET['id'];

$sql="DELETE FROM empleado  WHERE IdEmpleado='$IdEmpleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: agregar.php");
    }
?>
