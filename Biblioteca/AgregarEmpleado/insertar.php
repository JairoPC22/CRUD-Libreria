<?php
include("conexion.php");
$con=conectar();

$IdEmpleado=$_POST['IdEmpleado'];
$Nombre=$_POST['Nombre'];
$ApellidoP=$_POST['ApellidoP'];
$ApellidoM=$_POST['ApellidoM'];
$Sexo=$_POST['Sexo'];
$Edad=$_POST['Edad'];
$Estudios=$_POST['Estudios'];
$Turno=$_POST['Turno'];



$sql= "INSERT INTO empleado VALUES('$IdEmpleado','$Nombre','$ApellidoP','$ApellidoM', '$Sexo', '$Edad', '$Estudios', '$Turno')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: agregar.php");
    
}else {
}
?>