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


$sql="UPDATE empleado SET  Nombre='$Nombre',ApellidoP='$ApellidoP', ApellidoM='$ApellidoM', Sexo='$Sexo', Edad='$Edad', Estudios='$Estudios', Turno='$Turno'   WHERE IdEmpleado='$IdEmpleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: agregar.php");
    }
?>