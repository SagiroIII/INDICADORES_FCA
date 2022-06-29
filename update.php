<?php
session_start();
 if(isset($_SESSION['user'])){

include("php/conexion.php");
$conexion=conexion();

$idCapturaIndicador=$_POST['idCapturaIndicador'];
$IndicadorReal=$_POST['IndicadorReal'];
$Periodo=$_POST['Periodo'];
$NivelPrograma=$_POST['NivelPrograma'];
$Programa=$_POST['Programa'];
$Indicador=$_POST['Indicador'];
$idUsuario=$_POST['idUsuario'];

$sql="UPDATE capturaindicador SET  DatosReal='$IndicadorReal',periodo_idPeriodo='$Periodo',programa_nivelprograma_idNivelPrograma='$NivelPrograma',programa_idPrograma='$Programa', indicador_idIndicador='$Indicador', usuarios_idUsuario='$idUsuario' WHERE idCapturaIndicador='$idCapturaIndicador' ";
$query=mysqli_query($conexion,$sql);
if($query){
        Header("Location: modificar.php");
    }

    
?>

<?php
} else {
        header("location:index.php");
        }
 ?>