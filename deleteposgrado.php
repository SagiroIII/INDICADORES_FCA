<?php

include("php/conexion.php");
    $conexion=conexion();

$idCapturaIndicador=$_GET['id'];

$sql="DELETE FROM capturaindicador  WHERE idCapturaIndicador='$idCapturaIndicador'";
$query=mysqli_query($conexion,$sql);
 if($query){
        Header("Location: modificarposgrado.php");
    }
   
?>