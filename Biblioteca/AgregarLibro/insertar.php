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



$sql= "INSERT INTO libro VALUES('$IdLibro','$Nombre','$Autor','$Descripcion', '$Paginas', '$Editorial', '$Publicacion')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: agregar.php");
    
}else {
}
?>