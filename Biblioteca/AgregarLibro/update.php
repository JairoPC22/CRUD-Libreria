<?php

include("conexion.php");
$con=conectar();

$IdLibro=$_POST['IdLibro'];
$Nombre=$_POST['Nombre'];
$Autor=$_POST['Autor'];
$Descripcion=$_POST['Descripcion'];
$Paginas=$_POST['Paginas'];
$Editorial=$_POST['Editorial'];
$Publicacion=$_POST['Publicacion'];

$sql="UPDATE libro SET  Nombre='$Nombre',Autor='$Autor', Descripcion='$Descripcion', Paginas='$Paginas', Editorial='$Editorial', Publicacion='$Publicacion'   WHERE IdLIbro='$IdLibro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: agregar.php");
    }
?>