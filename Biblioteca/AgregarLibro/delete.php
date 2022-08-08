<?php

include("conexion.php");
$con=conectar();

$IdLibro=$_GET['id'];

$sql="DELETE FROM libro  WHERE IdLibro='$IdLibro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: agregar.php");
    }
?>
